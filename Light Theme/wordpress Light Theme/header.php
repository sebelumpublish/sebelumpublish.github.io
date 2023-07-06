<?php 
/*
Theme Name: wordpress light theme
Theme URI: https://yayasankitajuga.com/themes/wordpress light theme/
Author: Michael Angelo Clemens
Author URI: https://yayasankitajuga.com
Description: worpress light theme
Version: 1.4
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain:  wordpress light theme
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
       <img src="http://www.yayasankitajuga.com/wp-content/uploads/2019/11/kj.png" width="40px" alt="logo yayasan kita juga"/><a class="text-white" href="http://www.yayasankitajuga.com">Yayasan KitaJuga</a>
     <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://www.yayasankitajuga.com">Home <span class="sr-only">(current)</span></a>
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