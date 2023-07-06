<?php 
/*
Theme Name: latihan
Theme URI: https://wordpress.org/themes/twentynineteen/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Our 2019 default theme is designed to show off the power of the block editor. It features custom styles for all the default blocks, and is built so that what you see in the editor looks like what you'll see on your website. Twenty Nineteen is designed to be adaptable to a wide range of websites, whether you’re running a photo blog, launching a new business, or supporting a non-profit. Featuring ample whitespace and modern sans-serif headlines paired with classic serif body text, it's built to be beautiful on all screen sizes.
Requires at least: WordPress 4.9.6
Version: 1.4
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: twentynineteen
Tags: one-column, flexible-header, accessibility-ready, custom-colors, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, rtl-language-support, sticky-post, threaded-comments, translation-ready
*/

 ?>
 

<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta charset = "<?php bloginfo ('charset');?>" />
<title>Penyadang disabilitas | cacat labuan bajo | Lembaga sosial</title>
<meta name="Description" content="Yayasan kitajuga adalah  lembaga sosial bekerja pada isu disabilitas mempunyai 4 program yaitu: Kesehatan,ekonomi,pendidikan,sosial">

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
     <?php if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
    wp_head();
     ?>

<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Lobster|Satisfy&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Lobster|Mali|Satisfy|Tangerine&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Josefin+Sans|Lobster|Mali|Satisfy|Tangerine&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lobster&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=ABeeZee|Gloria+Hallelujah|Lobster&display=swap" rel="stylesheet">
<!-- end font -->


<!-- script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min"></script>
<!-- end script -->

<!-- contact form-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<!-- end contact form -->

</head>
<body>
	
 <header class="header-header" id="header-header">
  <nav class="navbar fixed-top navbar-expand-lg navbar-white bg-dark">
       <img src="http://localhost/sankita/wp-content/uploads/2019/07/kj.png" width="40px" alt="logo yayasan kita juga"/><a class="text-white" href="http://localhost/sankita">Yayasan KitaJuga</a>
     <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/sankita">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Tentang Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item text-dark" href="http://localhost/sankita/tentang-kami/sejarah">Sejarah</a>
          <a class="dropdown-item text-dark" href="http://localhost/sankita/tentang-kami/visi-2">visi dan misi</a>
          <a class="dropdown-item text-dark" href="http://localhost/sankita/tentang-kami/pencapaian">Pencapaian</a>
        </div>
      </li>
      <li>
        <a href=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/sankita/gallery/">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/sankita/contact/">Kontak</a>
      </li>
     
    </ul>
  </div>
</nav>
</header>