<?php
/*
Template Name: HAMBURGER archiveページ
*/
?>

<?php if (  is_archive() ) : ?> <?php endif; ?>

<?php get_header(); ?>  <!-- header.php読み込み -->

<div class="l-main">
        <div class="l-main__content">
          <div class="c-top__caption p-archive__caption">
            <div class="c-top__title p-top__title">Menu:</div>
            <div class="p-title">チーズバーガー</div>
          </div>


          <div class="p-contents">
            <div class="p-center__caption">
              <h1 class="p-sub__title">小見出しが入ります</h1>
              <p class="p-sub__area">テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。</p>
            </div>

            <a href="/single.html">



              <section class="p-figcaption__1 p-figcaption">
                <figure class="p-archive__image">
                  <img src="/img/archive2x.png" alt="ハンバーガー" class="l-archive__img">
                </figure>

                <div class="p-theme ">
                  <div class="p-figcaption__title-1"><?php echo CFS()->get('title');?></div>
                  <div class="p-second__title">小見出しが入ります</div>
                  <p class="p-theme__service">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  <button class="p-button" type="button">詳しく見る</button>
                </div><!--p-theme-->
              </section>
            </a><!--single.html-->

            <a href="/single.html">

              <section class="p-figcaption__2 p-figcaption">
                <figure class="p-archive__image">
                  <img src="/img/archive2x.png" alt="ハンバーガー" class="l-archive__img">
                </figure>

                <div class="p-theme ">
                  <div class="p-figcaption__title-1">ダブルチーズバーガー</div>
                  <div class="p-second__title">小見出しが入ります</div>
                  <p class="p-theme__service">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  <button class="p-button" type="button">詳しく見る</button>
                </div><!--p-theme-->
              </section>
            </a><!--single.html-->

                
            <a href="/single.html">
              <section class="p-figcaption__3 p-figcaption">
                <figure class="p-archive__image">
                  <img src="/img/archive2x.png" alt="ハンバーガー" class="l-archive__img">
                </figure>

                <div class="p-theme ">
                  <div class="p-figcaption__title-1">スペシャルチーズバーガー</div>
                  <div class="p-second__title">小見出しが入ります</div>
                  <p class="p-theme__service">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  <button class="p-button" type="button">詳しく見る</button>
                </div><!--p-theme-->
              </section>
            </a><!--single.html-->

          </div><!--p-contents-->

    

          <div class="p-back__forward">
            <a href="#" onclick="history.back()">
              <<前へ</a>
                <a href="#" onclick="history.forward()">次へ>></a>
          </div><!--p-back__forward-->

          <!--active-page-->
          <div class="c-page__link">
            <div class="c-page">page 1/10 <p class="c-page__p">
                <<</p>
            </div>

            <ul class="page-number">
              <li class="c-page__number c-border">1</li>
              <li class="c-page__number c-border">2</li>
              <li class="c-page__number c-border">3</li>
              <li class="c-page__number c-border">4</li>
              <li class="c-page__number c-border">5</li>
              <li class="c-page__number c-border">6</li>
              <li class="c-page__number c-border">7</li>
              <li class="c-page__number c-border">8</li>
              <li class="c-page__number c-border">9</li>
            </ul>

            <p class="c-page__p">>></p>
          </div><!--c-page__link-->


        </div><!--l-main__content"-->
      </div><!--main-->

    

      <div class="l-main-hide-contents"></div>



      <?php get_footer(); ?>
      <?php get_sidebar(); ?>


    </aside><!--l-sidebar__area-->
    <!---サイドメニュー-->

  </article><!--wrapper-->





  <!-- javascriptファイル -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="scss/js/script.js"></script>
</body>

</html>