<!DOCTYPE html>
<html <?php language_attributes(); //言語設置を自動的に
      ?>>

<head>


  <meta charset="<?php bloginfo('charset'); ?>">

  <!-- Webサイトの説明を検索エンジンに伝える -->
  <meta name="description" content="<?php bloginfo('description '); ?>">

  <!-- サイトの表示領域を、閲覧するデバイスの幅に合わせる -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta name="description" content="WordPress theme development static data for beginners">
  <meta name="keywords" content="WordPress, Theme, development">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/burg_bacon">
  <!-- CSS -->


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

  <!--

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="?; ?>/./css/style.css" type="text/css"> -->


  <!-- jQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/　
jquery.min.js">
</script>
  -->

  <script src="https://kit.fontawesome.com/b0d0736d54.js" crossorigin="anonymous"></script>



  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <article class="c-wrapper ">


    <main class="c-main">
      <header id="l-header">

        <!--Menuから✖️-->
        <div id="l-header__content">
          <div id="l-header__menu" class="button">Menu</div>
          <div id="l-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"> <?php bloginfo('name'); ?> </a></div>
          <p class="header__description"></p>
        </div><!--l-header__content-->


        <?php get_search_form(); ?>

      </header>