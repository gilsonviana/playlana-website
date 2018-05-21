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
                    <p class="the-post__content"><?php the_content(); ?></p>                    
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
            <div class="col-s3-one">
                <!-- newsletter -->
            </div>
        </div>
    </div>

</section>

<?php 

endwhile; endif;

get_footer(); ?>