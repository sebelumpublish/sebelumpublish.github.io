<?php

/*Template Name: page-Visi dan Misi*/
?>


<?php get_header(); ?>

<section class="wrap" id="wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mt-5">
				<h1>Berkarya bersama Penyandang Disabilitas</h1>
			</div>
		</div>
	</div>
</section>
		
<!-- end slider -->
	<section class="main-index" id="main-index">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-justify pt-3">
				 <?php if ( have_posts() ) : ?>
       				  <?php while ( have_posts() ) : the_post(); ?>
      			      <?php endwhile;?>
      			      <?php endif;?>
     		    <h1> <?php the_title();?></h1>
     		    <p><?php the_content(); ?></p>
			</div>
		</div>
	</div>
	</section>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>