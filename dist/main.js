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

const NavbarToggle = {
    state: {
        collapsed: false,        
    },
    element: document.querySelector('#navbar-toggle'),      
    target: document.querySelector('.navbar-box .navbar--collapsed'),
    handleClick: function() {        
        const defaultBtnImgSrc = this.element.firstElementChild.attributes.src.value;
        let open  = defaultBtnImgSrc.replace('open', 'close'),
            close = defaultBtnImgSrc.replace('close', 'open');    
        if (!this.state.collapsed) {
            this.target.style.display = 'block';    
            this.element.style.background = '#11A584';
            this.element.firstElementChild.attributes.src.value = open;
            this.state.collapsed = !this.state.collapsed;
            return;
        }
        this.target.style.display = 'none';  
        this.element.style.background = 'transparent';              
        this.element.firstElementChild.attributes.src.value = close;
        this.state.collapsed = !this.state.collapsed;        
    }
};

// Listeners
window.addEventListener('scroll', function() {
    FixedBar.handleScroll();
});

NavbarToggle.element.addEventListener('click', function() {
    NavbarToggle.handleClick();
});