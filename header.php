<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link href='http://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat|Lora:400,700' rel='stylesheet' type='text/css'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--   <link rel="stylesheet" href="animate.min.css"> -->
  <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/img/vivi_favicon.png">


  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>

    <section class="nav">
      <?php wp_nav_menu( array(
        'container' => false,
        'container_id' => 'nav',
        'menu' => 'main'
      )); ?>
    </section><!-- /.nav -->

</header><!--/.header-->

<style>
  li#menu-item-61 a {
    display: inline-block;
    background-image:url('<?php bloginfo('template_directory'); ?>/img/logo.svg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    width: 70px;
    height: 75px;
    margin: 0 1% 0 1%;
    text-indent: -9000px;
  }
</style>