<?php 

get_header( 'blog' ); 

if ( have_posts() ) : while ( have_posts() ) : the_post();


?>
<section class="post-page bg-default">

    <div class="container">
        <div class="row">
            <div class="col-s1-three">
                <h2 class="breadcrumb">blog</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-s1-three col-s3-two">
                <article class="the-post">
                    <h2 class="the-post__title"><?php the_title() ; ?></h2>
                    <h5 class="the-post__date"><?php echo get_the_date( 'F dS, Y' ); ?></h5>
                    <?php the_content(); ?> 
                    <div class="share-box">
                        <h4 class="share-box__title">share this</h4>
                        <div class="share-box__buttons">
                            <a href="#"><img src="<?php echo get_template_directory_uri() . '/img/facebook-btn.png'; ?>" /></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() . '/img/twitter-btn.png'; ?>" /></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() . '/img/email-btn.png'; ?>" /></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="d-none d-s3-block col-s3-one">
                <div class="blog-page__newsletter d-s1-none d-s3-block">
                    <h2 class="text-uppercase">join our newsletter</h2>
                    <p>
                        <span>Join over 80,000 people who read our</span>
                        <span>newsletter each week</span>
                    </p>
                    <form id="blog-page-newsletter-form">
                        <input type="text" name="subscriber-email" placeholder="Your email"/>
                        <button class="text-uppercase font-heading color-white" type="submit">subscribe <img src="<?php echo get_template_directory_uri(). '/img/angle-right.png'; ?>" width="6" height="11" /></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<?php 

endwhile; endif;

get_footer(); ?>