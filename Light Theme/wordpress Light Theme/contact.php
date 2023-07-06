<?php
/*Template Name: page-contact*/
?>


<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="contact-title">
				<h1>Yayasan kitajuga</h1>
			</div>

			<div class="col-md-6 offset-md-3 contact-form">
				<form id="contact-form" method="post" action="contact-form-handler.php">
				<input type="text" name="name" class="form-control" placeholder="Your Name" required><br>

				<input type="email" name="email" class="form-control" placeholder="Your Email" required><br>

				<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
				<input type="submit" class="form-control submit" value="SEND MESSAGE">
				</form>
			</div>
		</div>

	</div>
		


</div>


<?php get_footer(); ?>