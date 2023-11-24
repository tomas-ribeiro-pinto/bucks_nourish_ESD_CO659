import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('[data-accordion="collapse"] [data-accordion-target]');

    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-accordion-target');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !expanded);
                targetElement.classList.toggle('hidden');
            }
        });
    });
});
