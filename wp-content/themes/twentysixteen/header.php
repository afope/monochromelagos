<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<body>
	   <div class = "header">
	  <header class = "hidden-xs">
	    <nav class = "top-menu">
	      <ul class="cf">
	         <li class="menu">
	        <a href="#"><span>Photobook</span></a>
	       </li> &nbsp;
	       <li class="menu">
	       <a href="#"><span>Archive</span></a>
	       </li> &nbsp;
	       <li class="menu">
	       <a href="#"><span>Blog</span></a>
	       </li> &nbsp;
	       <li class="menu">
	      <a href="#"><span>Shop</span></a>
	      </li> &nbsp;
	       <li class="menu">
	      <a href="#"><span>About</span></a>
	     </li> &nbsp;
	     </ul>
	     </nav>
	  </div>
	</div>
	</header>



	<a href="javascript:void(0)" class="visible-xs"
	    <div class="hamburger">
	     <div class="icon" id = "adropdown">
	    <div class="menui bar top"></div>
	    <div class="menui bar middle"></div>
	    <div class="menui bar bottom"></div>
	  </div>
	</div>
	</a>

	<header class = "visible-xs">
	  <div class = "dropdown">

	<div class="dropdown-content">
	  <div class="mobilenav hidden">
	  <li>  <a href="#">Home</a> </li>
	  <li>  <a href="#">Photobook</a> </li>
	  <li>  <a href="#">Blog</a> </li>
	  <li>  <a href="#">Archive</a> </li>
	  <li>  <a href="#">Shop</a> </li>
	  <li>  <a href="#">About</a> </li>

	  </div>
	  </div>
	  </div>
	</header>
	</div>


	<script>
	function myFunction() {
	  $(document).ready(function () {
	    $(".icon").click(function () {
	        $(".mobilenav").fadeToggle(500);
	        $(".mobilenav").toggleClass("hidden")
	        $(".bar top").toggleClass("top-animate");
	        $(".bar middle").toggleClass("mid-animate");
	        $(".bar bottom").toggleClass("bottom-animate");
	    });
	});
	}
	</script>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
