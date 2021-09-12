<?php

/**
 * Template Name: contact
 *
 */
get_header()
?>
<div class="outer_section full_width">



<div class="inner_banner contact_banner full_width img_fit">
	<img src="images/Contaxt.png" alt="img" />
    <div class="inner_banner_overlay d-flex align-items-center justify-content-center">
    	<h1 class="mirror_inner"><span>Contact</span></h1>
    </div><!-- /.inner_banner_overlay -->
</div><!-- /.inner_banner -->


<div class="contact_page full_width">
<div class="container">
<div class="row">
	<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
    	<span class="cont_ic img_fit rellax" data-rellax-speed="4"><img src="images/contact-icon.png" alt="img" /></span>
    	<h2>For all inquiries, please fill out this form and we will get back to you soon!</h2>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="88" title="Contact form 1"]' ); ?>
</div><!-- /.row -->
</div><!-- /.contaienr -->
</div><!-- /.contact_page -->

<div class="find_your_bottle full_width text-center">
	<a href="#">find your bottle</a>
</div>

<?php
get_footer()
?>


</div><!-- /.outer_section -->


