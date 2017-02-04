<!DOCTYPE html>
<html>
<head>

  <title>Monochrome Lagos</title>
  <meta charset = "utf-8">
  <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="css/lagos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />



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






<div class = "content">
<div class = "banner">
  <div class = "text-wrap">
    <div class = "container-fluid" style="margin-right:3px;">
      <h1 class = "hidden-sm hidden-xs">MONOCHROME LAGOS</h1>
      <p class = "hidden-sm hidden-xs">A digital archive</p>
      <h1 class = "hidden-md hidden-lg" style = "font-size:40px; padding-top:80px;">MONOCHROME LAGOS</h1>
      <p class = "hidden-md hidden-lg" style = "font-size:20px; padding-top:0px;">A digital archive</p>
    </div>
  </div>
</div>


<div class = "container-fluid">
  <div class = "row">
    <div id = "quote">
      <blockquote class = "hidden-sm hidden-xs">
        It is not the critic who counts; not the man who points out how the strong man stumbles, or where the doer of deeds could have done them better. The credit belongs to the man who is actually in the arena, whose face is marred by dust and sweat and blood;
        <footer>
          <cite>
            Teddy Roosevelt
          </cite>
        </footer>
      </blockquote>
    </br>

    <blockquote class = "hidden-md hidden-lg" style = "font-size:20px; padding-top:0px;">
      It is not the critic who counts; not the man who points out how the strong man stumbles, or where the doer of deeds could have done them better. The credit belongs to the man who is actually in the arena, whose face is marred by dust and sweat and blood;
      <footer>
        <cite>
          Teddy Roosevelt
        </cite>
      </footer>
    </blockquote>
  </div>
</div>
</div>





<!--------------------DAILY AESTHETIC--------------------->

  <div class = "container-fluid">
<div class = "responsive-image" id = "banner2">




  </div>
</div>

</br>
</br>

<!--------------------DAILY AESTHETIC--------------------->





<!--------------------PICTURE CLASSIFICATION--------------------->

<div class = "container-fluid">
  <div class = "row">
    <div class = "boxes">


      <div class = "col-sm-4">
        <div class = "thumb" id = "one">
          <img src="img/imagefour.jpg" class="img-responsive" alt="">
          <h2>Lines</h2>
          <h3>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h3>


        </div>
      </div>



      <div class = "col-sm-4">
        <div class = "thumb" id = "two">
          <img src="img/fivee.jpg" class="img-responsive" alt="">

          <h2>Patterns</h2>
          <h3>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h3>
        </div>
      </div>



      <div class = "col-sm-4" >
        <div class = "thumb" id = "three">
          <img src="img/dance.jpg" class="img-responsive" alt="">

          <h2>Forms</h2>
          <h3>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h3>

        </div>
      </div>

    </div>
  </div>
</div>
</br>

<div class = "container-fluid">
  <div class = "row">
    <div class = "boxes">


      <div class = "col-sm-4">
        <div class = "thumb" id = "four">
          <img src="img/fivee.jpg" class="img-responsive" alt="">
          <h2>Portraits</h2>
          <h3>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h3>

        </div>
      </div>

      <div class = "col-sm-4">
        <div class = "thumb" id = "five">
           <img src="img/twoo.jpg" class="img-responsive" alt="">
          <h2>Landscapes</h2>
          <h3>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h3>


        </div>
      </div>

      <div class = "col-sm-4">
        <div class = "thumb" id = "six">
           <img src="img/three.jpg" class="img-responsive" alt="">
          <h2>Fashion</h2>
          <h3>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h3>

        </div>
      </div>



    </div>
  </div>
</div>
</div>
</br>


<!--------------------PICTURE CLASSIFICATION--------------------->





<div class = "footer">
  <footer>

    <div class = "col-sm-4" id = "first">
      <h1>Team</h1>
      <p>Contact</p>
      <p></p>

    </div>


    <div class = "col-sm-4" id = "subscribe" >

      <h1>Subscribe</h1>
      <form action="action_page.php">
        First name:<br>
        <input type="text" value="Mickey"><br>
        Last name:<br>
        <input type="text" name="lastname" value="Mouse"><br>
        Email Address:<br>
        <input type="text" name="email" value="email"><br><br>
        <input type="submit" value="Submit" id = "submit">
      </form>


    </div>


    <div class = "col-sm-4" id = "follow">
      <h1>Follow Us</h1>

      <a href="[full link to your Twitter]">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="30px" height="30px" viewBox="0 0 56.693 56.693" style="enable-background:new 0 0 56.693 56.693;"
        xml:space="preserve">
        <path d="M54.082,15.5495c-1.8115,0.8047-3.7597,1.3477-5.8051,1.5913c2.0874-1.25,3.6894-3.2305,4.4443-5.5918
        c-1.9531,1.1587-4.1152,2-6.418,2.4536c-1.8432-1.9643-4.4702-3.1919-7.3769-3.1919c-5.5816,0-10.1069,4.5254-10.1069,10.107
        c0,0.792,0.0893,1.563,0.2617,2.3027c-8.3999-0.4209-15.8477-4.4443-20.8325-10.5596c-0.8697,1.4922-1.3682,3.2281-1.3682,5.0811
        c0,3.5063,1.7842,6.5996,4.4961,8.4126c-1.6563-0.0532-3.2154-0.5073-4.5777-1.2647c-0.0009,0.042-0.0009,0.0845-0.0009,0.128
        c0,4.896,3.4839,8.9809,8.1079,9.9101c-0.8482,0.2305-1.7412,0.3545-2.6631,0.3545c-0.6519,0-1.2847-0.063-1.9019-0.1816
        c1.2867,4.0151,5.0191,6.9375,9.441,7.019c-3.459,2.711-7.8165,4.3267-12.5523,4.3267c-0.8154,0-1.6196-0.0484-2.4106-0.1411
        c4.4736,2.8681,9.7856,4.541,15.4931,4.541c18.5908,0,28.7559-15.4009,28.7559-28.7569c0-0.4375-0.0088-0.8745-0.0283-1.3076
        C51.0137,19.3571,52.728,17.5769,54.082,15.5495z"/>
      </svg>
    </a>
    <a href="[full link to your Pinterest]">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="30px" height="30px" viewBox="0 0 56.7 56.7" style="enable-background:new 0 0 56.7 56.7;" xml:space="preserve">
      <g>
        <circle cx="28.1" cy="30" r="4.4"/>
        <path d="M33.6,19.2h-11c-1.6,0-3,0.5-3.9,1.4c-0.9,0.9-1.4,2.3-1.4,3.9v11c0,1.6,0.5,3,1.5,4c1,0.9,2.3,1.4,3.9,1.4h10.9
        c1.6,0,3-0.5,3.9-1.4c1-0.9,1.5-2.3,1.5-3.9v-11c0-1.6-0.5-2.9-1.4-3.9C36.6,19.7,35.3,19.2,33.6,19.2z M28.1,36.8
        c-3.8,0-6.8-3.1-6.8-6.8c0-3.8,3.1-6.8,6.8-6.8S35,26.2,35,30C35,33.8,31.9,36.8,28.1,36.8z M35.2,24.5c-0.9,0-1.6-0.7-1.6-1.6
        s0.7-1.6,1.6-1.6s1.6,0.7,1.6,1.6S36.1,24.5,35.2,24.5z"/>
        <path d="M28.3,5.2c-13.6,0-24.6,11-24.6,24.6c0,13.6,11,24.6,24.6,24.6c13.6,0,24.6-11,24.6-24.6C53,16.2,41.9,5.2,28.3,5.2z
        M41.4,35.6c0,2.3-0.8,4.3-2.2,5.7c-1.4,1.4-3.4,2.1-5.6,2.1H22.7c-2.2,0-4.2-0.7-5.6-2.1c-1.5-1.4-2.2-3.4-2.2-5.7v-11
        c0-4.6,3.1-7.8,7.8-7.8h11c2.3,0,4.2,0.8,5.6,2.2c1.4,1.4,2.1,3.3,2.1,5.6V35.6z"/>
      </g>
    </svg>
  </a>
  <a href="[full link to your Facebook page]">
    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="30px" height="30px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
    <path d="M28.347,5.155c-13.6,0-24.625,11.025-24.625,24.625c0,13.602,11.024,24.625,24.625,24.625
    c13.602,0,24.625-11.023,24.625-24.625C52.972,16.18,41.948,5.155,28.347,5.155z M36.933,43.403
    c-1.324,0.621-2.523,1.061-3.598,1.312c-1.076,0.252-2.236,0.377-3.484,0.377c-1.418,0-2.254-0.178-3.344-0.533
    c-1.088-0.359-2.018-0.873-2.785-1.531c-0.771-0.664-1.303-1.371-1.602-2.115c-0.297-0.746-0.445-1.828-0.445-3.248V26.792h-4.212
    v-4.391c1.218-0.395,2.63-0.963,3.496-1.702c0.873-0.74,1.568-1.627,2.094-2.664c0.525-1.033,0.889-2.35,1.086-3.951h4.41v7.174
    h7.168v5.534h-7.168v7.951c0,1.799-0.023,2.836,0.166,3.344s0.664,1.035,1.182,1.34c0.688,0.41,1.469,0.617,2.354,0.617
    c1.57,0,3.131-0.512,4.684-1.531V43.403z"/>
  </svg>

</a>

</div>
<div class="clearfix"></div>
</footer>
</div>
<!-- </div>
</div>
</div> -->


<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lagos.js"></script>


</body>
</html>
