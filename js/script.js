const footer_year = document.querySelector('.footer__container__bottom span');

footer_year.innerHTML = new Date().getFullYear();

const toggle_menu_el = document.querySelectorAll('.nav-link.dropdown-toggle');
const main_wrapper = document.getElementById('main-wrapper');

const toggleMainWrapperClass = () => {
    // Check if any element in toggle_menu_el has the "show" class
    const isMenuOpen = ([...toggle_menu_el]).some(el => el.classList.contains('show'));

    // If the menu is open, add the "opened-menu" class to main_wrapper
    if (isMenuOpen) {
        main_wrapper.classList.add('opened-menu');
    } else {
        // If the menu is not open, remove the "opened-menu" class from main_wrapper
        main_wrapper.classList.remove('opened-menu');
    }
}

document.addEventListener('click', toggleMainWrapperClass);

// Third level dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
    const thirdLevelToggles = document.querySelectorAll('.dropdown-toggle-third');

    thirdLevelToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Prevent closing the parent dropdown

            // Close all other open third-level dropdowns
            thirdLevelToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    otherToggle.classList.remove('show');
                    const otherNext = otherToggle.nextElementSibling;
                    if (otherNext && otherNext.classList.contains('nav-item-chevron-right')) {
                        const otherMenu = otherNext.nextElementSibling;
                        if (otherMenu && otherMenu.classList.contains('dropdown-menu-child')) {
                            otherMenu.classList.remove('show');
                        }
                    }
                }
            });

            // Toggle the current one
            this.classList.toggle('show');
            const nextSibling = this.nextElementSibling;
            if (nextSibling && nextSibling.classList.contains('nav-item-chevron-right')) {
                const nextNextSibling = nextSibling.nextElementSibling;
                if (nextNextSibling && nextNextSibling.classList.contains('dropdown-menu-child')) {
                    nextNextSibling.classList.toggle('show');
                }
            }
        });
    });
});
