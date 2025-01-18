document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');

    function checkSectionInView() {
        sections.forEach(function (section) {
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                section.classList.add('show');
            }
        });
    }

    // Initial call
    checkSectionInView();

    // Call when user scrolls
    window.addEventListener('scroll', checkSectionInView);
});
