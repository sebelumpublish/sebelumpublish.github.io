<?php
/*Template Name: page-pendidikan*/
?>

<?php get_header(); ?>
<br>
<section class="main-index" id="main-index">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-justify pt-3">
				 <?php if ( have_posts() ) : ?>
       				  <?php while ( have_posts() ) : the_post(); ?>
      			      <?php endwhile;?>
      			      <?php endif;?>
     			 <p><?php the_content(); ?></p>
			</div>
		</div>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>