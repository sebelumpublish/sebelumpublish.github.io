
<?php get_header(); ?>

<section class="main-index" id="main-index"></section>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				 <?php if ( have_posts() ) : ?>
       				  <?php while ( have_posts() ) : the_post(); ?>
      			      <?php endwhile;?>
      			      <?php endif;?>
     		    <h1> <?php the_title();?></h1>
     		    <p><?php the_content(); ?></p>
			</div>
		</div>
	</div>	
<?php get_sidebar(); ?>
<?php get_footer(); ?>