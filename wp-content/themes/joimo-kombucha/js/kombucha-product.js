if (document.querySelector('.faq')) {
    document.querySelectorAll('.faq').forEach(f => {
        f.addEventListener("click", e => {
            if (e.target.closest('.faq__heading')) {
                f.classList.toggle('active')
            }
        })
    })
}

if (document.querySelector('.nt-nutrition-modal')) {
    class Modal {
        constructor(modal) {
            this.modal = modal;
        } 

        openModal = () => {
            this.modal.classList.add('active');
            document.addEventListener("click", this.closeOnbackdropClick);
            document.body.style.overflow = 'hidden';
        }

        closeModal = () => {
            this.modal.classList.remove('active');
            document.removeEventListener("click", this.closeOnbackdropClick);
            document.body.style.overflow = '';
        }

        closeOnbackdropClick = e => {
            if (!this.modal.contains(e.target) && !e.target.closest('.ingredients__btn')) this.closeModal();
        }
    }

    const nutrModal = new Modal(document.querySelector('.nt-nutrition-modal'));
    if (document.querySelector('.ingredients__btn')) {
        document.querySelector('.ingredients__btn').addEventListener("click", nutrModal.openModal);
    }

    document.querySelector('.nt-nutrition-modal__close').addEventListener("click", nutrModal.closeModal)
}


 document.addEventListener('DOMContentLoaded', () => {
        const variationsForm = document.querySelector('.variations_form');
        if (!variationsForm) return;
        // ADDED: Create a jQuery object for the form to trigger events
        const $variationsForm = jQuery(variationsForm);
        const variationsData = JSON.parse(variationsForm.dataset.product_variations || '[]');
        
        if (variationsData.length === 0) return;

        const sizeOptions = variationsForm.querySelectorAll('.nt-variations__size-option');
        const packageOptions = variationsForm.querySelectorAll('.nt-kombucha-variations__package-option');
        const decreaseBtn = variationsForm.querySelector('#decrease-amount');
        const increaseBtn = variationsForm.querySelector('#increase-amount');
        const amountEl = variationsForm.querySelector('#amount');
        const quantityInput = variationsForm.querySelector('input[name="quantity"]');
        const addToCartBtn = variationsForm.querySelector('#add-to-cart-btn');
        const priceSpan = addToCartBtn.querySelector('.nt-kombucha-variations__price-chosen');
        const variationIdInput = variationsForm.querySelector('.variation_id');

        let currentVariation;
        let selectedAttributes = {};
        
        const findMatchingVariation = () => {
            // ADDED: Reset current variation before each search
            currentVariation = null; 

            if (Object.keys(selectedAttributes).length < 2) {
                // ADDED: Trigger reset event if not all attributes are selected
                $variationsForm.trigger('reset_data');
                updateUI(null); 
                return;
            }
            
            for (const variation of variationsData) {
                let match = true;
                for (const attrName in variation.attributes) {
   
                    
                    if (variation.attributes[attrName] !== selectedAttributes[attrName.replace("attribute_", "")]) {
                        match = false;
                        break;
                    }
                }
                if (match) {
                    currentVariation = variation;
                    break;
                }
            }

            // ADDED: This is the key functionality.
            // It triggers an event that WooCommerce listens for.
            // This makes the 'Add to Cart' button aware of the selected variation.
            if (currentVariation) {
                $variationsForm.trigger('found_variation', [currentVariation]);
            } else {
                // Trigger reset if no specific match was found by your logic
                $variationsForm.trigger('reset_data');
            }

            if (!currentVariation) {
                currentVariation = variationsData[0];
                 // Also trigger found_variation for your fallback logic
                $variationsForm.trigger('found_variation', [currentVariation]);
            }

            updateUI(currentVariation);
        };

        const updateUI = (variation) => {
            const currentQuantity = parseInt(quantityInput.value, 10);
            console.log(variation);
            
            if (variation && variation.is_in_stock) {
                // Variation is available and in stock
                const totalPrice = variation.display_price * currentQuantity;
                priceSpan.textContent = `$${totalPrice.toFixed(2)}`;
                addToCartBtn.disabled = false;
                
                // Update hidden variation ID for WC
                variationIdInput.value = variation.variation_id;

                // Handle quantity limits
                decreaseBtn.disabled = currentQuantity <= variation.min_qty;
                increaseBtn.disabled = variation.max_qty && currentQuantity >= variation.max_qty;

            } else {
                // Variation is not found or out of stock
                priceSpan.textContent = 'N/A';
                addToCartBtn.disabled = true;
                if (variation) { // It exists but is out of stock
                     priceSpan.textContent = 'Out of Stock';
                }
                variationIdInput.value = '';
            }
        };
        
        // --- Event Listeners ---

        sizeOptions.forEach(option => {
            option.addEventListener('click', () => {
                const attrName = option.dataset.attributeName;
                const attrValue = option.dataset.size;
                selectedAttributes[attrName] = attrValue;
                
                sizeOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
                
                findMatchingVariation();
            });
        });

        packageOptions.forEach(option => {
            option.addEventListener('click', () => {
                const attrName = option.dataset.attributeName;
                const attrValue = option.dataset.package;
                selectedAttributes[attrName] = attrValue;
                
                packageOptions.forEach(opt => {
                    opt.classList.remove('selected');
                    opt.querySelector('.custom-radio').checked = false;
                });
                option.classList.add('selected');
                option.querySelector('.custom-radio').checked = true;

                findMatchingVariation();
            });
        });

        increaseBtn.addEventListener('click', () => {
            let qty = parseInt(quantityInput.value, 10);
            const max_qty = currentVariation ? currentVariation.max_qty : null;
            if (!max_qty || qty < max_qty) {
                 quantityInput.value = qty + 1;
                 amountEl.textContent = quantityInput.value;
                 updateUI(currentVariation);
            }
        });

        decreaseBtn.addEventListener('click', () => {
            let qty = parseInt(quantityInput.value, 10);
            const min_qty = currentVariation ? currentVariation.min_qty : 1;
             if (qty > min_qty) {
                 quantityInput.value = qty - 1;
                 amountEl.textContent = quantityInput.value;
                 updateUI(currentVariation);
            }
        });

        // --- Initial State ---
        
        function initialize() {
            // Select the first size option by default
            if(sizeOptions.length > 0) {
                sizeOptions[0].click();
            }
            // Select the first package option by default
            if(packageOptions.length > 0) {
                packageOptions[0].click();
            }
        }

        initialize();
    });