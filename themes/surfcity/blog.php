<?php

/**
 * Template Name: blog
 *
 */
get_header()
?>


<div class="outer_section full_width">

<div class="inner_banner blog_banner full_width img_fit">
	<img src="images/Blog.png" alt="img" />
    <div class="inner_banner_overlay d-flex align-items-center justify-content-center">
    	<h1 class="mirror_inner"><span>blog</span></h1>
    </div><!-- /.inner_banner_overlay -->
</div><!-- /.inner_banner -->

<div class="left_right_sec padd-com recipes_sec combine_blog full_width">
<div class="container">
<div class="row">
	<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 side_nav">
    	<div class="sticky-top">
    	<div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Filter
                </button>
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="artist_names recipes_ full_width">
                
                <?php
                dynamic_sidebar('sidebar-1');
                ?>
                </div><!-- /.artist_names -->
              </div>
            </div>
          </div>
        </div>	
        </div><!-- /.sticky-top -->
    </div><!-- /.side_nav -->
    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 recipes">
	<!--<div class="row">
	    	<div class="recipe_img img_fit">
        		<img src="images/blg1.png" alt="img" />
            </div>-->
        
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post', 'posts_per_page' => 2, 'paged' => $paged );
		$wp_query = new WP_Query($args);
		while ( have_posts() ) : the_post(); ?>
		<h4><?php the_title() ?></h4>
	    <p><?php the_content() ?></p>
	    <a href="<?php echo esc_url( get_permalink() ); ?>" class="red_m">Read More</a>
	    <br/>
		<?php endwhile; ?>
            <br/><br/>
         <?php next_posts_link( '&larr; Prev Pages', $wp_query ->max_num_pages); ?>
        <?php previous_posts_link( 'Next Page &rarr;' ); ?>
            
        </div><!-- /.col-xl-5 -->
      
        <!--<div class="col-sm-12 pageination_style2">
        	<a href="<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>"> class="disable"><span class="nxt_nw"></span></a>
            <a href="#">1 / 3</a>
            <a href="#"><span class="prv_pw"></span></a>
        </div><!-- /.pagination_style_2 -->
    </div><!-- /.row -->
    </div><!-- /.art_images_details -->
</div><!-- /.row -->
</div><!-- /.contaienr -->
</div><!-- /.left_right_sec -->

<div class="find_your_bottle full_width text-center">
	<a href="#">find your bottle</a>
</div>


<?php
get_footer()
?>
</div><!-- /.outer_section -->

