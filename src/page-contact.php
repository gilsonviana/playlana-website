<?php 

get_header( 'contact' ); 
include('contact-form-process.php'); ?>

<section class="contact-page">

    <form id="contact-page-form" action="" method="post">
        <h2 class="text-center text-uppercase color-primary font-heading">contact us</h2>
        <div class="contact-page-message text-center">
            <?php if($_SERVER['REQUEST_METHOD'] === 'POST') :?>
                <?php if( $name && $email &&  $message ) : ?>
                    <div class="contact-page-message--success">
                        <p>Thank you!</p>
                    </div>
                <?php endif; ?>
                <?php if( !$name || !$email || !$message ) : ?>
                    <div class="contact-page-message--error">
                        <p><span>Invalid</span> data. Let's try again?</p>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="f-group">
            <label for="contact-name">Name*</label>
            <input type="text" name="contact-name" value="<?php echo $name; ?>" class="<?php echo ($name_error) ? 'field-error' : ''; ?>" />                            
        </div>
        <div class="f-group">
            <label for="contact-email">Email*</label>
            <input type="text" name="contact-email" value="<?php echo $email; ?>" class="<?php echo ($email_error) ? 'field-error' : ''; ?>" />
        </div>
        <div class="f-group">
            <label for="contact-message">Message*</label>
            <textarea name="contact-message" cols="30" rows="10" type="text" class="<?php echo ($message_error) ? 'field-error' : ''; ?>"><?php echo $message; ?></textarea>        
        </div>        
        <div class="f-group">
            <span class="required-fields">* Required fields</span>
        </div>
        <div class="f-group">
            <button type="submit" class="text-uppercase font-normal">submit <img src="<?php echo get_template_directory_uri(). '/img/angle-right.png'; ?>" width="6" height="11" /></button>
        </div>                 
    </form>

</section><!-- /contact-page -->

<?php get_footer(); ?>