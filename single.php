<?php
/*
Template Name: HAMBURGER single
*/

?>

<?php get_header(); ?> <!-- header.php読み込み -->

<div class="l-main">
  <div class="l-main__content">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="p-contents p-single__contents">
          <div class="p-center__caption">
            <p class="p-sub__area p-sub-single__area">
            <h1 class="c-top__title p-top__title p-single__static p-single__toptitle">
              <?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            </p>
          <?php endwhile; ?>
        <?php else : ?>
          <p>表示する記事がありません</p>
        <?php endif; ?>

        <div class="l-main-hide-contents"></div>
          </div><!--l-single__bottom__background-->

          <?php get_footer(); ?>
          <?php get_sidebar(); ?>

          </aside><!--l-sidebar__area-->
          <!---サイドメニュー-->

          </article>

          <!-- javascriptファイル -->
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

          <script type="text/javascript" src="scss/js/script.js"></script>
          </body>

          </html>