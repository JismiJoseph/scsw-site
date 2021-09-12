
<footer class="full_width">
<div class="container">
<div class="row">
	<div class="col-xl-8 col-lg-8">
    	<h4>Sign up to get exclusive offers</h4>
        <div class="full_width input_wrap">
        	<!--<input type="text" placeholder="Email Address" />
            <button type="button">Submit</button>-->
            <div class="container relative">

            <?php echo do_shortcode( '[hf_form slug="email"]' ); ?>
        </div>
              
            
        </div><!-- /.full_width -->
        <p>Stay in touch with us for new releases, events, and more.</p>
        <div class="full_width footer_links">
        	<ul>
            	<li><a href="#">Spirits</a></li>
                <li><a href="#">Canned Cocktails</a></li>
                <li><a href="#">Seltzers</a></li>
            </ul>
            <ul>
            	<li><a href="#">Private Events</a></li>
                <li><a href="#">Cocktail Classes</a></li>
                <li><a href="#">Private Tours</a></li>
            </ul>
            <ul>
            	<li><a href="our-story">Our Story</a></li>
                <li><a href="#">Artists Collective</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Recipes</a></li>
            </ul>
            <ul>
            	<li><a href="#">Where to Buy</a></li>
                <li><a href="#">Shop Merch</a></li>
                <li><a href="contact-us">Contact</a></li>
               
                <li><a href="faq">FAQ</a></li>
            </ul>
        </div><!-- /.ul-links -->
    </div><!-- /.col-xl-8 col-lg-8 -->
    <div class="col-xl-4 col-lg-4">
    <div class="row">
    	<div class="col-sm-12 btt">
        	<a href="#" id="toTop"><span class="cirlcle_btn"></span><span>Top</span></a>
            <a href="index.html" class="footer_logo img_fit"><img src="<?php echo get_template_directory_uri().'/images/footer-logo.svg'; ?>" alt="img" /></a>
        </div><!-- btt -->
        <div class="social_med col-sm-12">
        	<h5>Follow us on social</h5>
            <div class="d-flex justify-content-between">
            <a href="#"><i class="fab fa-yelp"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div><!-- /.col-sm-12 -->
    </div><!-- /.row -->	
    </div><!-- /.col-xl-4 -->
    <div class="col-sm-12 copy_right">
    <div class="like_row justify-content-between">
    	<div><p>© 2020 Surf City Still Works</p></div>
        <div>
        	<a href="#">714.253.7606</a>
            <a href="#">7242 Heil Ave. Huntington Beach, CA 92647</a>
            <a href="#">info@surfcitystillworks.com</a>
        </div>
        <div>
        	<a href="#">Please drink responsibly</a> 
            <a href="#">Privacy Policy</a>
        </div>
    </div><!-- /.like_row -->	
    </div><!-- /.col-sm-12 -->
</div><!-- /.row -->
</div><!-- /.contaienr -->
</footer><!-- /.footer -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri().'/assets/build/js/owl.carousel.min.js'?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.0.0/rellax.min.js"></script>
<script src="<?php echo get_template_directory_uri().'/assets/build/js/custom.js'?>"></script>
<script>
$(document).ready(function(){
  setTimeout(function () {
  //Position of the header in the webpage
  var position = $("h1.mirrior").position();
  var padding = 0; //Padding set to the header
  var leftd = position.left + padding;
  var topd = position.top + padding;
  $("h1.mirrior").find("span").css("background-position","-"+leftd+"px -"+topd+"px"); 
}, 1000);
  
  $(window).resize(function(){
	 var position = $("h1.mirrior").position();
	  var padding = 0; //Padding set to the header
	  var leftd = position.left + padding;
	  var topd = position.top + padding;
	  $("h1.mirrior").find("span").css("background-position","-"+leftd+"px -"+topd+"px");  
  });
});
</script>
<?php wp_footer() ?>
</body>
</html>






