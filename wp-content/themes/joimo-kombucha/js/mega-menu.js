document.addEventListener("DOMContentLoaded", () => {
    if (document.querySelector('.nt-mega-menu__parent-item--mega')) {

        class MegaMenu {
            constructor(menu, openButton) {
                this.menu = menu;
                this.openButton = openButton;
                this.isOpen = false;
            }

            openMenu = () => {
                this.isOpen = true;
                this.menu.classList.add('active');
                document.addEventListener("click", this.closeOnBackdrop);
                document.querySelector('.site-header-v2').classList.add('reverse');
            }

            closeMenu = () => {
                this.isOpen = false;
                this.menu.classList.remove('active');
                document.removeEventListener("click", this.closeOnBackdrop)
                document.querySelector('.site-header-v2').classList.remove('reverse');
            }

            closeOnBackdrop = e => {
                if (!this.menu.contains(e.target) && !this.openButton.contains(e.target)) this.closeMenu()
            }

            toggleMenu = () => this.isOpen ? this.closeMenu() : this.openMenu();
        }   

        document.querySelectorAll('.nt-mega-menu__parent-item--mega').forEach(item => {
            const menu = new MegaMenu(item.querySelector('.nt-mega-menu__mega-menu'), item);
            item.querySelector('a').addEventListener("click", (e) => {
                e.preventDefault();
                menu.toggleMenu();
            })
        })
    }
})