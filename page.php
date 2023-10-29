<?php
/*
Template Name: HAMBURGER page
*/
?>

<?php if (is_page()) : ?>

  <?php get_header(); ?> <!-- header.php読み込み -->

  <div class="l-main">
    <div class="l-main__content">


      <?php if (has_post_thumbnail()); ?>
      <?php the_post_thumbnail('page_eyecatch '); ?>

      <div class="c-top__title p-top__title p-single__static p-single__toptitle "><?php the_title(); ?></div>

    </div><!--p-single__caption-->
  <?php endif; ?>

  <?php the_content(); ?>

  <div class="p-contents p-single__contents">
    <div class="p-center__caption">

    </div>

    <div class="l-single__bottom__background">

      <div class="l-single__list__inner">


      </div><!--l-single__list__inner-->

    </div><!--p-contents-->


    <div class="l-main-hide-contents"></div>

  </div>
  <?php get_footer(); ?>
  <?php get_sidebar(); ?>

  <!--l-single__bottom__background-->

  </article><!--wrapper-->





  <!-- javascriptファイル -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="scss/js/script.js"></script>
  </body>

  </html>