<?php

/**
 * Single Post Temaplate
 *
 * 
 */
get_header()
?>

<div id="primary">
   <main id="main" class="site-main mt-5" role="main">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
            
            <div>
               <img  src="<?php echo get_field('profilepic'); ?>" alt="img">
                
        </div>
               <?php
                  if ( have_posts() ) :
                  	?>
               <div class="post-wrap">
               <h4><?php the_title() ?></h4>
               
               <div class="post-meta">
                <p>
                   On:  <?php the_time('d-M-Y'); ?>
                   
                   Author:
                   <a href="">
                   <?php
                     echo get_the_author();
                     ?>
                     </a>
                     
                     category:
                     <?php
                         $categories= get_the_category();
                         $output = '';
                         
                         if($categories){
                           for( $i = 0; $i< count($categories); $i++){
                           $output .= '<a href="'.get_category_link($categories[$i]->term_id).'">'.$categories[$i]->name;
                           }
                           }
                           echo trim($output, ', ');
                           ?>
                           
                           
                   </p>
                   
                   
               </div>
              <br/><br/>
	       <div class="content">
                    <?php the_content(); ?>
                </div>
                
                
                </div>
                
               </div>
               <?php
                  endif;
                  ?>
            </div>
            </div>
            <div class="prev-link"><?php previous_post_link(); ?></div>
            <div class="next-link"><?php next_post_link(); ?></div>
         
      </div>
   </main>
</div>

