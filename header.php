<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Patent Searching</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
  <nav id="header-nav" class="">
    <div class="container">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="navbar-brand text-hide">Search Center
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="Search-Center Logo" />
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <div class="header-phone">
          <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
        </div>
        <div class="clearfix"></div>
        <?php
          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => '',
            'container_id' => '',
            'container_class' => '',
            'menu_class' => 'nav navbar-nav navbar-right', 
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'searchcenter_header_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($header_nav_args);
        ?>

      </div>
    </div>
  </nav>

<?php if(is_front_page()): ?>

  <div id="hp-hero" class="hero" style="background-image:url(<?php the_field('hero_background_image'); ?>); <?php the_field('hero_background_image_css'); ?>">
    <div class="hero-caption">
      <h1><?php the_field('hero_title'); ?></h1>
      <?php 
        $hero_link = get_field('hero_link');
        if($hero_link): ?>
          <a href="<?php echo $hero_link['url']; ?>" class="btn-main btn-clear"><?php echo $hero_link['title']; ?></a>
      <?php endif; ?>
    </div>
    <span class="vertical-bar"></span>
  </div>

<?php else: ?>

  <?php 
    $hero_background_image = get_stylesheet_directory_uri() . '/images/map-graphic-hand.jpg';
    $hero_background_image_css = 'background-position:center center;';
    if(get_field('hero_background_image')){
      $hero_background_image = get_field('hero_background_image');
      $hero_background_image_css = get_field('hero_background_image_css');
    }

    $hero_title = get_the_title();
    $queried_object = get_queried_object();
    
    if(is_archive()){
      //var_dump($queried_object);
      $hero_title = $queried_object->labels->name;
    }elseif(is_singular() && !is_page()){
      $hero_title = $queried_object->post_type;
    }elseif(get_field('hero_title')){
      $hero_title = get_field('hero_title');
    } ?>

  <div id="hero" class="hero" style="background-image:url(<?php echo $hero_background_image; ?>); <?php echo $hero_background_image_css; ?>">
    <div class="container">
      <div class="hero-caption">
        <h1<?php if(get_field('align_title_right')){ echo ' class="text-right"'; } ?>><?php echo $hero_title; ?></h1>
      </div>
    </div>
  </div>

<?php endif; ?>