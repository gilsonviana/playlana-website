const NavbarToggle = {
    state: {
        collapsed: false,        
    },
    element: document.querySelector('#navbar-toggle'),      
    target: document.querySelector('.navbar-box .navbar .navbar--collapsed'),
    handleClick: function() {        
        const defaultBtnImgSrc = this.element.firstElementChild.attributes.src.value;
        let open  = defaultBtnImgSrc.replace('open', 'close'),
            close = defaultBtnImgSrc.replace('close', 'open');    
        if (!this.state.collapsed && window.innerWidth < 768) {
            if ( window.innerWidth >= 375 ) {
                document.querySelectorAll('.apple-store-btn')[1].style.display = 'none';
            }
            this.target.style.display = 'block';    
            this.element.style.background = '#11A584';
            this.element.firstElementChild.attributes.src.value = open;
            this.state.collapsed = !this.state.collapsed;
            return;
        }
        if (window.innerWidth < 768 && window.innerWidth >= 375) {
            document.querySelectorAll('.apple-store-btn')[1].style.display = 'block';
        }
        this.target.style.display = 'none';  
        this.element.style.background = 'transparent';              
        this.element.firstElementChild.attributes.src.value = close;
        this.state.collapsed = !this.state.collapsed;        
    }
};

NavbarToggle.element.addEventListener('click', function() {
    NavbarToggle.handleClick();
});