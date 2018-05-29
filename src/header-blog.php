<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'title' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php include('newsletter-form-process.php'); ?>
    <main>
        <?php get_template_part( 'fixed-bar' ); ?>
        <header class="header-blog">
            <div class="navbar-box">
                <div class="container">
                    <div class="row">
                        <div class="col-s1-half">
                            <a href="<?php echo esc_url( home_url() ); ?>">
                                <img class="d-s2-none" src="<?php echo get_template_directory_uri() . '/img/logo-sm.png'; ?>" alt="Playlana logo" width="60" height="51">                            
                                <img class="d-s1-none d-s2-block" src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="Playlana logo" width="199" height="78">                            
                            </a>
                        </div>
                        <div class="col-s1-half">
                            <nav class="navbar">                                
                                <a class="d-s2-none apple-store-btn" href="https://www.apple.com/ios/app-store/"><img src="<?php echo get_template_directory_uri() . '/img/apple.png'; ?>" alt="apple logo" /> app store</a>                                
                                <button id="navbar-toggle" class="d-s2-none">
                                    <img src="<?php echo get_template_directory_uri() . '/img/hamburger-btn-open.png'; ?>">
                                </button>
                                <div class="navbar--collapse d-s1-none">
                                    <a href="https://www.apple.com/ios/app-store/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/apple.png'; ?>" alt="apple logo" /> app store</a>
                                    <a href="<?php echo esc_url( get_page_link( 7 ) ); ?>">blog</a>
                                    <a href="<?php echo esc_url( get_page_link( 9 ) ); ?>">contact</a>
                                </div>
                                <div class="navbar--collapsed">
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
            <div class="header-lead">
                <div class="container">
                    <div class="row">
                        <div class="col-s1-three">
                            <div class="box text-center">
                                <h2 class="color-primary">PLAYLANA'S BLOG</h2>
                                <p class="color-white font-heading">
                                    <span>Thoughts and techniques on getting</span>
                                    <span>the best of your mind, body and spirit</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-newsletter d-s3-none">
                <div class="container">
                    <div class="row">
                        <div class="col-s1-three">
                            <form id="header-blog-newsletter-form" action="" method="post">
                                <input class="<?php echo ($newsletter_error) ? 'field-error' : ''; ?>" type="text" placeholder="Your email" name="subscriber-email" value="<?php echo $newsletter; ?>">                                
                                <button class="font-heading <?php echo ($newsletter_error) ? 'submit-btn--error' : ''; ?>" type="submit">SUBSCRIBE <img src="<?php echo get_template_directory_uri(). '/img/angle-right.png'; ?>" width="6" height="11" /></button>                                
                                <p class="header-blog-newsletter-form-invalid <?php echo ($newsletter_error) ? '--show' : ''; ?>"><span>Invalid</span> email</p>                                
                                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$newsletter_error) : ?>
                                    <div class="header-blog-newsletter-form-success">
                                        <p>Thank you!</p>
                                    </div>
                                <?php endif; ?>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </header>