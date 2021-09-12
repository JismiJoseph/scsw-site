<?php

/**
 * Template Name: ourstory
 *
 */
get_header()
?>

<div class="outer_section full_width">



<div class="inner_banner our_story_banner full_width img_fit">
	<img src="<?php echo get_template_directory_uri().'/images/Canned_Cocktails.png'; ?>" alt="img" />
    <div class="inner_banner_overlay d-flex align-items-center justify-content-center">
    	<h1 class="mirror_inner"><span>Our<br>Story</span></h1>
    </div><!-- /.inner_banner_overlay -->
</div><!-- /.inner_banner -->

<div class="welcom-place full_width">
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-12 col-sm-12 img_fit">
	

	<!--<img src="<?php echo get_template_directory_uri().'/images/our-place.jpg'; ?>" alt="img">-->
    </div><!-- /.col-lg-6 -->
    
    
  <div>
             
               
              <img src="<?php echo get_template_directory_uri(); ?><?php echo the_field('image'); ?>" alt="img">
                
        </div>
    
    <div class="col-lg-6 col-md-12 col-sm-12">
    
    
   	
    
    <span class="lovehb img_fit rellax" data-rellax-speed="5"><img src="<?php echo get_template_directory_uri().'/images/icons/loveHB.png'; ?>" alt="img" /></span>
    
    
      <?php if( get_field('title') )
                     { ?>  
                            
                     <h2><?php echo the_field('title');?></h2>
                     <?php } ?>

    
    
    <?php if( get_field('content') )
                     { ?>  
                            
                     <p><?php echo the_field('content');?></p>
                     <?php } ?>
   
    
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.welcom-place -->

<div class="kind_look full_width">
<div class="container">
<div class="row">
	<div class="col-lg-4 col-md-12 col-sm-12">
	
	   <?php if( get_field('section1') )
                     { ?>  
                            
                     <h3><?php echo the_field('section1');?></h3>
                     <?php } ?>
	
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-8 col-md-12 col-sm-12">
    
       <?php if( get_field('section2') )
                     { ?>  
                            
                     <p><?php echo the_field('section2');?></p>
                     <?php } ?>
   
		<h4>-Josh & Elena Kornoff</h4>
    </div><!-- /.col-lg-8 -->
</div><!-- /.row -->
</div><!-- /.contaienr -->
</div><!-- /.king_look -->

<div class="the_team full_width">
<div class="container">
<div class="row">
	<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
    	<h3>The <br>team</h3>
    </div><!-- /.col-xl-4 -->
	<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 arts_images">
    <div class="row">
    	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/team1.jpg'; ?>" alt="img"><h5>Allys<span>Co-Founder</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/team2.jpg'; ?>" alt="img"><h5>Ben<span>Co-Founder</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/team3.jpg'; ?>" alt="img"><h5>Bill<span>Partner</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/team4.jpg'; ?>" alt="img"><h5>Chris<span>Director of Sales</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/team5.jpg'; ?>" alt="img"><h5>Elena<span>Head Distiller</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/team6.jpg'; ?>" alt="img"><h5>Josh<span>Operations Manager</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/team7.jpg'; ?>" alt="img"><h5>Liz<span>Bartender</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/team8.jpg'; ?>" alt="img"><h5>Sara<span>Partner</span></h5></a>
        </div><!-- /.col-xl-4 -->
    </div><!-- /.row -->
    </div><!-- /.col-xl-8 -->
</div><!-- /.row -->
</div><!-- .contaienr -->
</div><!-- .the_team -->

<div class="advisory_board full_width">
<div class="container">
<div class="row">
	<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
    	<h3>Advisory <br>board</h3>
    </div><!-- /.col-xl-4 -->
	<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 arts_images">
    <div class="row">
    	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/ad1.jpg'; ?>" alt="img"><h5>Bart<span>Co-Founder Quiksilver</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/ad2.jpg'; ?>" alt="img"><h5>Bob<span>Co-Founder Cuater</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/ad3.jpg'; ?>" alt="img"><h5>Robbie<span>Co-Founder Travis Mathew</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/ad4.jpg'; ?>" alt="img"><h5>Ryan<span>Founder Fisa</span></h5></a>
        </div><!-- /.col-xl-4 -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        	<a href="#" class="img_fit full_width"><img src="<?php echo get_template_directory_uri().'/images/ad5.jpg'; ?>" alt="img"><h5>Travis<span>President Fisa</span></h5></a>
        </div><!-- /.col-xl-4 -->
        
    </div><!-- /.row -->
    </div><!-- /.col-xl-8 -->
</div><!-- /.row -->
</div><!-- .contaienr -->
</div><!-- .advisory_board -->

<div class="its_whats full_width">
<div class="container">
<div class="row">
	<div class="col-xl-5 col-lg-5 col-sm-12 col-md-12 img_fit">
    	<img src="<?php echo get_template_directory_uri().'/images/itswahts.jpg'; ?>" alt="img" />
    </div><!-- /.col-xl-5 -->
    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
    
     <?php if( get_field('title2') )
                     { ?>  
                            
                     <h4><?php echo the_field('title2');?></h4>
                     <?php } ?>
    
    	
    	
    	 <?php if( get_field('content2') )
                     { ?>  
                            
                     <p><?php echo the_field('content2');?></p>
                     <?php } ?>
    	
       
        <span class="signature img_fit"><img src="<?php echo get_template_directory_uri().'/images/icons/signature.png'; ?>" alt="img" /></span>
    </div><!-- /.col-xl-7 -->
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.its_whats -->

<div class="find_your_bottle full_width text-center">
	<a href="#">find your bottle</a>
</div>


<?php
get_footer();
?>

</div><!-- /.outer_section -->


