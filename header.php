<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<title>Monochrome Lagos</title>
	<meta charset = "utf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/lagos.css" rel="stylesheet">
</head>

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
