<?php

/**
 * Template Name: faq
 *
 */
get_header()
?>




<div class="outer_section full_width">


<div class="inner_banner faq_banner full_width img_fit">
	<img src="images/FAQ.png" alt="img" />
    <div class="inner_banner_overlay d-flex align-items-center justify-content-center">
    	<h1 class="mirror_inner"><span>Faq</span></h1>
    </div><!-- /.inner_banner_overlay -->
</div><!-- /.inner_banner -->

<div class="faq_page full_width">
<div class="container">
	<h2>Frequently asked questions</h2>
    <div class="accordian_faq full_width">
    	<div class="accordion" id="accordionExample">
    	    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 recipes">
	<!--<div class="row">
	    	<div class="recipe_img img_fit">
        		<img src="images/blg1.png" alt="img" />
            </div>-->
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'faq1');
		$wp_query = new WP_Query($args);
		while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title() ?></h3>
                <?php the_content(); ?>
           
	    <!--<a href="<?php echo esc_url( get_permalink() ); ?>" class="red_m">Read More</a>-->
		<?php endwhile; ?>
         <?php next_posts_link( '&larr; Prev Pages', $wp_query ->max_num_pages); ?>
        <?php previous_posts_link( 'Next Page &rarr;' ); ?>
            
        </div><!-- /.col-xl-5 -->
    	<!--
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  I just heard about Surf City Still Works! How long have you been around?
                </button>
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Why is there an alcohol purchase limit?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Do you make tequila?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Do you make everything at your distillery?
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Will you be making beer?
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="headingSix">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Where can you ship?
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="headingSeven">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Can I mix and match the 200ml Gift Pack?
                </button>
              </h2>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="headingEight">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Where do you get your barrels from?
                </button>
              </h2>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="headingNine">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  Where else do you sell?
                </button>
              </h2>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="headingTen">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                  How old is your Bourbon?
                </button>
              </h2>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="headingEleven">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                  What does your bourbon compare to?
                </button>
              </h2>
            </div>
            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
              <div class="card-body padding_block">
                <p>Liquor laws differ per state, and as a craft distillery CA limits what we can sell at 2,250ml per person, per day. The combinations allowed per person are :</p>
                <ol>
                	<li>(3) 750ml bottles</li>
                    <li>(2) 200ml gift packs</li>
                    <li>(1) 4-pk canned cocktails + (1) 750ml bottle</li>
                    <li>(1) 4-pk canned cocktails + 200ml gift pack</li>
                </ol>
                <p>We are technically a manufacturer,not a retailer, but as of 2016 the CA ABC decided to allow craft distilleries to sell directly to our customers which helps us succeed against the larger distilleries in CA.</p>
              </div>
            </div>
          </div>
        </div>
    </div><!-- /.accordian_faq -->
</div><!-- /.contaienr -->
</div><!-- /.left_right_sec -->

<div class="find_your_bottle full_width text-center">
	<a href="#">find your bottle</a>
</div>

<?php
get_footer()
?>

</div><!-- /.outer_section -->


