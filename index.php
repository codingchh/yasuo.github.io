<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


 <div id="full_banner">
	



           <?php echo do_shortcode('[rev_slider slider1]'); ?>
  	    		
        

</div>



		<div id="contentarea">

<div id="conterntarea_left">
<span class="wel">Welcome ! </span><br />
<br />


<div id="top_left1">
	<span class="left_left">
<img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" />
</span>
<span class="left_right1">
<span class="lsbca">LSBCA</span><br />
<span class="london">
London School of Business & Certified Accountants is established by a non profit educational trust and has been teaching professional courses such as ACCA, IFRS etc. in India since 2006.
</span></span>
<span class="left_bottom"><span class="london">

Number of our qualified students are working in top MNCs. <br />
We have also added "B.COM Plus" so that a commerce graduate from any University can enhance his/her degree in international stream to get into Multinational companies.
</span>
</span>
</div>

</div>

	<div id="conterntarea_right">
    <span class="wel1">Latest News</span><br />
<br />
<br />

<?php
$args = array (
    'post_type'              => 'latestnews',    
    'order'                  => 'ASC',
    'posts_per_page'         => '2',
);

// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
?>  

<div id="right_left1">
	<div id="left_left21">
<span class="dec">10</span><br />
<span class="dec1">
DEC</span>
</div>
	<div id="left_rihgt21">

<span class="mes"><?php echo $query->post->post_title;?> </span><br />
<span class="cumi">
<?php echo $query->post->post_content;?> </span>
<br />
<br />
<br />

<div align="left"><span class="more"><a href="#">More</a></span></div>
</div>
</div>

<?php }
}?>


<div style="clear:both;"></div>
</div><div style="clear:both;"></div>
</div>


	<div id="admissionfull">
<div id="admission">
	
    
    <?php
$args = array (
    'post_type'              => 'ADMISS',    
    'order'                  => 'ASC',
    'posts_per_page'         => '4',
);

// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
?>  

    
    <div id="content2_left1" align="center">
<span class="online"><?php echo $query->post->post_title;?></span><br />
<?php echo the_post_thumbnail(); ?><br /><br />
<span class="ineniet">
 <?php echo $query->post->post_content;?> </span><br />
<span class="eniascet">
<?php echo get_post_meta($query->post->ID,'position',true);?></span>

<br />
<br />
<div align="center"><span class="more222"><a href="#">More</a></span></div>

</div>

    
    
    <?php }
}?>

    
    <div style="clear:both;"></div>
</div><div style="clear:both;"></div>
</div>







<div id="professionalfull">
	<div id="professional">Professional Programs
    <div id="course">
    	<div id="course1">
        	<div align="left" class="inquiry1">Undergraduate Programs
            </div>
            <div align="left" class="graduates2">
            	<ul>
                	<li><a href="#">B.com</a></li>
 					<li><a href="#">BBA</a></li>
					<li style="border-bottom:none;"><a href="#">BSc. Accounting Oxford Brookes</a></li>
                </ul>
            </div>
            <div align="left" class="inquiry1">Dual Professional Programs
            </div>
            <div align="left" class="graduates2">
            	<ul>
                	<li><a href="#">B.com + ACCA</a></li>
 					<li><a href="#">BBA + CIMA</a></li>
					<li><a href="#">BSc. Oxford + ACCA</a></li>
                </ul>
            </div>
            <div align="left" class="more_but"><span class="more"><a href="#">View More</a></span></div>
        </div>
        <div id="course2">
           	<div align="left" class="inquiry1">Post Graduate Programs
            </div>
            <div align="left" class="graduates1">
            	<ul>
                	<li><a href="#">ACCA</a></li>
 					<li><a href="#">CIMA</a></li>
					<li style="border-bottom:none;"><li><a href="#">Executive PGP</a></li>
                    
                </ul>
            </div>
            <div align="left" class="inquiry1">Dual Professional Programs
            </div>
            <div align="left" class="graduates1">
            	<ul>
                	<li><a href="#">PGP + ACCA</a></li>
 					<li><a href="#">PGP + CIMA</a></li>
					<li><a href="#">PGP + CFA (US)</a></li>
                    <li><a href="#">PGP + CPA (US)</a></li>
                </ul>
            </div>
             <div align="left" class="more_but3"><span class="more"><a href="#">View More</a></span></div>
        </div>
         <div id="course3">
            	<div align="left" class="inquiry1">Career Development classes<br /> </div>
<div align="left" class="join1"><span class="join"> WHY TO JOIN LSBCA</span><br />

<br />

<span class="ca">Career Development Classes are designed to help you create a career strategy, focusing on your strengths, weaknesses and interests to direct you towards clear goals. 
<br />

The classes will also give you confidence to aim for jobs that are most suited to your skills set, and...</span>
       </div>    
            
            	
       <div align="left" class="more_but2"><span class="more"><a href="#">View More</a></span></div>  
            
            
        </div>
         <div id="course4">
         	   	<div align="left" class="inquiry1">Special Program for Qualified
            </div>
            <div align="left" class="graduates2">
            	<ul>
                	<li><a href="#">CA</a></li>
 					<li><a href="#">ACCA</a></li>
					<li><a href="#">CPA</a></li>
                    <li><a href="#">CIMA</a></li>
 					<li><a href="#">CMA</a></li>
					<li><a href="#">CFA</a></li>
                </ul>
            </div>
                   <div align="left" class="more_but4"><span class="more"><a href="#">View More</a></span></div>  

        </div><div style="clear:both;"></div>
    </div>
</div>


	
</div>


<?php
//get_sidebar();
get_footer();
