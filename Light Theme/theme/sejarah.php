<?php

/*Template Name: page-Sejarah*/
?>


<?php get_header(); ?>

<div class="img-header" id="img-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="http://localhost/sankita/wp-content/uploads/2019/07/ros.jpg" class="rounded-circle" width="300px" alt="">
					<h1>Rosalien Rutten</h1>		
				</div>
			</div>
		</div>
	</div>
<!--jumbotron-->
	
	<!-- end header -->
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

<?php get_footer(); ?>