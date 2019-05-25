<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<div id="footerfull">
		<div id="footer">
			<div id="footer_left1" >
<span class="qucik">Quick Links</span><br />
<div align="left" class="footerli">
<ul>
<li><a href="#">Programs</a></li>
<li><a href="#"> Faculty</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Webmaster</a></li>
<li><a href="#">Addmission</a></li>
</ul>
</div>
 </div>      
  <div id="footer_left2" class="footerli">
<span class="qucik">Admission Office</span><br />

<span class="school">
London School Of Business & Certified Accountants
SCO.843,First Floor, NAC, Manimajra, 
Chandigarh-160 101, India</span>
 </div>
 <div id="footer_left3" class="footerli">
<span class="qucik">Information</span><br />

<ul>
<li><a href="#">Study Live</a></li>
<li><a href="#"> Our Qualified Students</a></li>
<li><a href="#">Download Application  Form</a></li>
<li><a href="#">New Session</a></li>
</ul>
 </div>
 <div id="footer_left4" class="footerli">
<span class="qucik">Follow Us</span><br />

<div id="twitterpng">
<div id="twitter_left"><img src="<?php echo get_template_directory_uri(); ?>/images/Twitter.png" />
</div>
<div id="twitter_right">
<span class="twitter"><a href="#">www.twitter.com</a></span>
</div>
</div>
<div id="twitterpng">
<div id="twitter_left"><img src="<?php echo get_template_directory_uri(); ?>/images/Youtube.png" />
</div>
<div id="twitter_right">
<span class="twitter"><a href="#">www.youtube.com</a></span></div>
</div>
<div id="twitterpng">
<div id="twitter_left"><img src="<?php echo get_template_directory_uri(); ?>/images/Facebook.png" />
</div>
<div id="twitter_right">
<span class="twitter"><a href="#">www.facebook.com</a></span></div>
</div>





 </div>
 <div id="footer_left5" class="footerli">
<span class="qucik">Contact Us</span><br />
<span class="school">
T : +91-172-4634648, 
M : +91-9541120113<br />

Email : <a href="#">info@lsbca.com</a></span> </div>
</div>
</div>


<div id="footerbottomfull">
	<div id="footerbottom">
		<div id="footerbottom_left">
  		<span class="copy">Copyrights 2014.All Rights Reserved</span>
  </div>
  
<div id="footerbottom_right">
  		<span class="copy">Website Designed by <a href="#">Wave Infotech</a>.</span>
  </div>

</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script defer src="<?php //echo get_template_directory_uri(); ?>/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>-->


</html>