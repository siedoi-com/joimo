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