<?php
/*
Template Name: HAMBURGER index
*/
?>

<?php if ((is_home() || is_front_page()) && !is_paged()) : ?>


  <?php get_header(); ?> <!-- header.php読み込み -->

  <div class="l-main">
    <div class="l-main__content">
      <img class="c-top__caption p-top__caption" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mainvisual-pc.jpg" alt="SHOP画像">

      <h1 class="c-top__title">ダミーサイト</h1>
    </div>

    <div class="c-center__caption ">

      <a href="/archive.html">
        <section class="figcaption-1 figcaption">

          <div class="l-contens__title">
            <h2 class="c-label">
              <a href="<?php echo esc_url(get_category_link('3')); ?>">Take Out</a>
            </h2>
            <div class="c-line__label"></div>
          </div><!--l-contens__title-->

          <div class="p-item">
            <div class="l-theme l-item">
              <div class="c-figcaption__title-1">
                <a href="<?php echo esc_url(get_category_link('3')); ?>">Take OUT
              </div>
              <div class="l-theme__service">
                当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</div>
            </div><!--l-theme-->

            <div class="l-theme__theme l-item">
              <div class="c-figcaption__title-1"><a href="<?php echo esc_url(get_category_link('3')); ?>">Take OUT</div>
              <div class="l-theme__service">
                当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</div>
            </div><!--l-theme_2-->
          </div><!--p-item-->
        </section>
      </a><!--archive.html-->


      <a href="/archive.html">
        <section class="figcaption-2 figcaption">

          <div class="l-contens__title">
            <h2 class="c-label">
              <a href="<?php echo esc_url(get_category_link('2')); ?>">Eat In</a>
            </h2>
            <div class="c-line__label"></div>
          </div>

          <div class="p-item">
            <div class="l-theme l-item">
              <div class="c-figcaption__title-1">
                <a href="<?php echo esc_url(get_category_link('2')); ?>">Eat In
              </div>
              <div class="l-theme__service">
                店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事い</div>
            </div><!--p-theme-->

            <div class="l-theme__theme l-item">
              <div class="c-figcaption__title-1">
                <a href="<?php echo esc_url(get_category_link('2')); ?>">Eat In
              </div>
              <div class="l-theme__service">
                店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事い</div>
            </div><!--l-theme_2-->
          </div><!--p-item-->
        </section>
    </div><!--c-center__caption-->

    </a><!--archive.html-->


    <div class="p-solution__list">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7272.055268875937!2d139.73736675284957!3d35.65217310776672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd28fedf41%3A0x2a575d84f2ba5a92!2z44Ot44O844K944OzIO-8s-adseS6rOOCv-ODr-ODvOW6lw!5e0!3m2!1sja!2sjp!4v1697201508402!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="p-gray__area"></div>

      <h2 class="p-solution__list__title">見出しが入ります</h2>
      <div class="c-line p-last__title"></div>

      <div class="p-gray__area__second"></div>
      <p class="p-solution__text c-text">
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </div><!--p-solution__list-->
  </div><!--l-main__content"-->

  </div><!--main-->

  <div class="l-main-hide-contents"></div>



  <?php get_footer(); ?>
  <?php get_sidebar(); ?>


<?php endif; ?>