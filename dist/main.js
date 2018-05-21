const FixedBar = {
    element: document.querySelector('.fixed-bar'),
    handleScroll: function() {
        if (window.pageYOffset > this.element.scrollTop) {
            this.element.classList.add('fixed-bar--show');
            return;
        }
        this.element.classList.remove('fixed-bar--show');        
    }
};

window.addEventListener('scroll', function() {
    FixedBar.handleScroll();
});