const FixedBar = {
    state: {
        collapsed: false,
    },
    element: document.querySelector('.fixed-bar'),
    toggle: document.querySelector('.fixed-bar #fixed-navbar-toggle'),
    target: document.querySelector('.fixed-navbar--collapsed'),
    handleScroll: function() {
        if (window.pageYOffset > this.element.scrollTop) {
            this.element.classList.add('fixed-bar--show');
            return;
        }
        this.element.classList.remove('fixed-bar--show');                
    },
    handleClick: function() {
        const defaultBtnImgSrc = this.toggle.firstElementChild.attributes.src.value;
        const open  = defaultBtnImgSrc.replace('open', 'close'),
              close = defaultBtnImgSrc.replace('close', 'open');    
        if (!this.state.collapsed && window.innerWidth < 768) {
            document.querySelector('.fixed-bar .apple-store-btn').style.display = 'none';                     
            this.target.style.display = 'block';
            this.toggle.style.background = '#11A584';
            this.toggle.firstElementChild.attributes.src.value = open;
            this.state.collapsed = !this.state.collapsed;
            return;            
        }
        document.querySelector('.fixed-bar .apple-store-btn').style.display = 'block';
        this.target.style.display = 'none';  
        this.toggle.style.background = 'transparent';              
        this.toggle.firstElementChild.attributes.src.value = close;
        this.state.collapsed = !this.state.collapsed;         
    }
};

window.addEventListener('scroll', function() {
    FixedBar.handleScroll();
});

FixedBar.toggle.addEventListener('click', function() {
    FixedBar.handleClick();
})

