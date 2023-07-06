<?php
/*Template Name: page-Ekonomi*/
?>

<?php get_header(); ?>
<br><br>
<section class="main-index" id="main-index">
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-md-2 text-justify pt-3">
				 <?php if ( have_posts() ) : ?>
       				  <?php while ( have_posts() ) : the_post(); ?>
      			      <?php endwhile;?>
      			      <?php endif;?>
     		    <p><?php the_content(); ?></p>
			</div>
			<div class="col-md-5 pt-1">
				<br>
					<section class="slider" id="slider">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
   
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://localhost/sankita/wp-content/uploads/2019/07/ekonomi.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="http://localhost/sankita/wp-content/uploads/2019/08/slide-eko1.jpg" class="d-block w-100" alt="...">
	
      </div>

      <div class="carousel-item">
        <img src="http://localhost/sankita/wp-content/uploads/2019/08/slider-eko2.jpg" class="d-block w-100" alt="...">
      </div>

      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>
	<!-- end slider -->

</div>
<br>
<?php get_sidebar(); ?>
<?php get_footer(); ?>