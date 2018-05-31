<nav class="fixed-bar">
    <div class="navbar-box">
        <div class="container">
            <div class="row">
                <div class="col-s1-half">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img class="d-s2-none" src="<?php echo get_template_directory_uri() . '/img/navbar-sm-logo-fixed.png'; ?>" alt="Playlana logo" width="108" height="32">                            
                        <img class="d-s1-none d-s2-block" src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="Playlana logo" width="199" height="78">                            
                    </a>
                </div>
                <div class="col-s1-half">
                    <nav class="navbar">                                
                        <a class="d-s2-none apple-store-btn" href="https://www.apple.com/ios/app-store/"><img src="<?php echo get_template_directory_uri() . '/img/apple.png'; ?>" alt="apple logo" /> app store</a>
                        <button id="fixed-navbar-toggle" class="d-s2-none">
                            <img src="<?php echo get_template_directory_uri() . '/img/hamburger-btn-open.png'; ?>">
                        </button>
                        <div class="navbar--collapse d-s1-none">
                            <a href="https://www.apple.com/ios/app-store/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/apple.png'; ?>" alt="apple logo" /> app store</a>
                            <a href="<?php echo esc_url( get_page_link( 7 ) ); ?>">blog</a>
                            <a href="<?php echo esc_url( get_page_link( 9 ) ); ?>">contact</a>
                        </div>
                        <div class="fixed-navbar--collapsed">
                            <ul class="text-uppercase">
                                <li><a href="<?php echo esc_url( home_url() ); ?>">home</a></li>
                                <li><a href="https://www.apple.com/ios/app-store/" target="_blank">app store</a></li>
                                <li><a href="<?php echo esc_url( get_page_link( 7 ) ); ?>">blog</a></li>
                                <li><a href="<?php echo esc_url( get_page_link( 9 ) ); ?>">contact</a></li>
                            </ul>
                        </div>                        
                    </nav>
                </div>
            </div>                    
        </div>
    </div>
</nav>