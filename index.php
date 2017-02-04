
<?php get_header(); ?>

<div class = "content">
  <div class="blog">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<div class="date"><?php the_time( 'M j y' ); ?></div>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="author"><?php the_author(); ?></div>
				</div><!--.post-header-->
				<div class="entry clear">
					<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
					<?php wp_link_pages(); ?>
				</div><!--. entry-->
				<footer class="post-footer">
					<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
				</footer><!--.post-footer-->
			</div><!-- .post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			<nav class="navigation index">
				<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
				<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
			</nav><!--.navigation-->
		<?php else : ?>
	<?php endif; ?>
</div>
</div><!--.content-->
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
