<?php get_header( 'contact' ); ?>

<section class="contact-page">

    <div class="container">
        <div class="row">
            <div class="col-s1-three">
                <div class="box">
                    <form id="contact-page-form">
                        <h2 class="text-center text-uppercase color-primary font-heading">contact us</h2>
                        <div class="f-group">
                            <label for="contact-name">Name*</label>
                            <input type="text" name="contact-name">
                        </div>
                        <div class="f-group">
                            <label for="contact-email">Email*</label>
                            <input type="email" name="contact-email">
                        </div>
                        <div class="f-group">
                            <label for="contact-message">Message*</label>
                            <textarea name="contact-message" cols="30" rows="10"></textarea>
                            <span class="required-fields">* Required fields</span>
                        </div>        
                        <div class="f-group">
                            <button type="submit" class="text-uppercase font-normal">submit <img src="<?php echo get_template_directory_uri(). '/img/angle-right.png'; ?>" width="6" height="11" /></button>
                        </div>                 
                    </form>
                </div>
            </div>
        </div>
    </div>

</section><!-- /contact-page -->

<?php get_footer(); ?>