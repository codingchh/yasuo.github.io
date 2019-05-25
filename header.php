<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php // echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/demo.css" type="text/css" media="screen" />
	
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" />
<!--<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>-->
</head>

<body <?php body_class(); ?> onload="MM_preloadImages('<?php echo get_template_directory_uri(); ?>/images/option4_hover.png','<?php echo get_template_directory_uri(); ?>/images/option1_hover.png','<?php echo get_template_directory_uri(); ?>/images/option2_hover.png','<?php echo get_template_directory_uri(); ?>/images/option3_hover.png')">
<div id="wrapper">
	<div id="headerfull">
		<div id="header">
			<div id="header_left">
                            
                            <?php
$args = array (
    'post_type'              => 'LOGO',    
    'order'                  => 'ASC',
    'posts_per_page'         => '1',
);

// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
?>  

<?php echo the_post_thumbnail(); ?>

<?php }
}?>


</div>
	<div id="header_right">
		<div id="right_top">
			<div id="top_left">
           <div align="center"> <span class="log"><a href="http://waveinfotechdemos.com/londonwp/wp-login.php?">Login</a></span></div>
            </div>
            <div id="top_left">
           <div align="center"> <span class="log"><a href="http://waveinfotechdemos.com/londonwp/wp-login.php?action=register">Register</a></span></div>
            </div>


</div>
	<div id="right_bottom">
            <?php echo dynamic_sidebar('sidebar-4'); ?>
                </div>
</div><div style="clear:both;"></div>

</div><div style="clear:both;"></div>
</div>





<div id="navigation_full">
	<div id="navigation" class="list">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?><div style="clear:both;"></div>
</div>
</div>
    