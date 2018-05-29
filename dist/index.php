<?php get_header( 'blog' ); ?>

<section class="blog-page bg-default">

    <div class="container">
        
        <div class="row">
            <div class="col-s1-three col-s3-two">
                <!-- Post loop -->
                <?php 
                
                // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                // $query = new WP_Query( array(
                //     'paged' => $paged
                // ) );

                if( have_posts() ) : 
                    while( have_posts() ) : 
                        the_post(); ?>
                    <article class="blog-post text-center">
                        <img class="blog-post__thumbnail" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="Post thumbnail">
                        <a class="color-primary font-bold" href="<?php the_permalink(); ?>">
                            <h2 class="blog-post__title"><?php the_title(); ?></h2>                                                
                        </a>
                        <h5 class="blog-post__date"><?php echo get_the_date( 'F dS, Y' ); ?></h5>
                        <div class="blog-post__body">
                            <?php the_excerpt(); ?>
                            <a class="blog-post__more text-uppercase font-heading" href="<?php the_permalink(); ?>">continue reading</a>
                        </div>
                        <div class="blog-post__breaker">
                            <img src="<?php echo get_template_directory_uri() . '/img/blog-line-breaker.png'; ?>" alt="line breaker">                        
                        </div>
                    </article>
                <?php endwhile; 
                endif; ?>
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

        <!-- Pagination -->
        <div class="row">

        </div>
    </div>

</section><!-- /blog-page -->

<?php get_footer(); ?>