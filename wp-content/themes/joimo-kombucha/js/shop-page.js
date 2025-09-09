if (document.querySelector(".nt-shop-headline") && document.querySelector(".nt-shop-section")) {
    gsap.registerPlugin(Flip);
    const filters = document.querySelector(".nt-shop-headline__filters");
    const sections = gsap.utils.toArray('.nt-shop-section');
    const sectionsWrapper = document.querySelector(".nt-shop-sections-wrapper");

    const showSection = (targetId) => {
        sectionsWrapper.style.height = sectionsWrapper.offsetHeight + "px";

        const state = Flip.getState(sections);

        sections.forEach(section => {
            const shouldBeVisible = (targetId === 'all' || section.id === targetId);
            section.style.display = shouldBeVisible ? 'block' : 'none';
        });

        Flip.from(state, {
            duration: 0.6,
            scale: true,
            ease: "power2.inOut",
            absolute: true,
            onEnter: elements => gsap.from(elements, {opacity: 0, scale: 0.95}),
            onLeave: elements => gsap.to(elements, {opacity: 0, scale: 0.95}),
            onComplete: () => {
                sectionsWrapper.style.height = ""; 
            }
        });
    }

    const toggleActiveBtn = (target) => {
        const currentActive = filters.querySelector('.nt-shop-headline__btn.active');
        if (currentActive) {
            currentActive.classList.remove('active');
        }
        console.log(target);
        
        target.classList.add('active');
    }

    // --- HANDLE HASH ON PAGE LOAD ---
    const hash = window.location.hash.substring(1); 
    console.log(hash);
    
    const targetButtonFromHash = hash ? filters.querySelector(`[data-target="${hash}"]`) : null;
    const targetSectionFromHash = hash ? document.getElementById(hash) : null;

    if (targetButtonFromHash && targetSectionFromHash) {
        showSection(hash);
        toggleActiveBtn(targetButtonFromHash);
    } 
    
    if (filters) {
        filters.addEventListener("click", e => {
            const targetCatBtn = e.target.closest('.nt-shop-headline__btn');
            if (!targetCatBtn) return;
            
            e.preventDefault();
            
            if (targetCatBtn.classList.contains('active')) return;
            
            toggleActiveBtn(targetCatBtn);
            const targetCat = targetCatBtn.dataset.target;
            
            if (targetCat) {
                showSection(targetCat);
            }
        });
    }
}