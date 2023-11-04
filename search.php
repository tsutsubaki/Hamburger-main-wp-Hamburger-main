<?php
/*
Template Name: HAMBURGER archive_searchページ
*/

?>

<?php if (is_search()) : ?> <?php endif; ?>

<?php get_header(); ?> <!-- header.php読み込み -->




<div class="l-main">
  <div class="l-main__content">
    <div class="c-top__caption p-archive__caption">
      <div class="c-top__title p-top__title">Search:</div>
      <div class="p-title"><?php the_search_query(); ?></div>
    </div>

    <div class="p-contents">
      <div class="p-center__caption">
        <h1 class="p-sub__title">小見出しが入ります</h1>

        <p class="p-sub__area">テキストが入ります。テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。</p>
      </div>


      <?php get_template_part('loop'); ?>
    </div><!--p-contents-->


    <!--active-page-->
    <div class="c-page__link">

      <!-- ページナビゲーション -->
      <?php wp_pagenavi(); ?>

    </div><!--c-page__link-->


  </div><!--l-main__content"-->
</div><!--main-->

<div class="l-main-hide-contents"></div>


<?php get_footer(); ?>
<?php get_sidebar(); ?>

　</div><!--l-single__bottom__background-->
</article><!--wrapper-->





<!-- javascriptファイル -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="scss/js/script.js"></script> -->
</body>


</html>