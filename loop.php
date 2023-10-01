<?php if ( have_posts() ): ?>
<?php while ( have_posts()): ?>
    <?php the_post(); ?>

<section class="p-figcaption__1 p-figcaption">
                <figure class="p-archive__image">
<img src="<?php echo get_template_directory_uri(); ?>/img/archive2x.png" alt="ハンバーガー" class="l-archive__img">
                </figure>

                <div class="p-theme ">
    <div class="p-figcaption__title-1"><?php the_title(); ?></div>
    <div class="p-second__title">小見出しが入ります</div>
    <p class="p-theme__service"><?php the_excerpt(); ?></p>
    <button class="p-button" type="button">詳しく見る</button>
                </div><!--p-theme-->
    </section>

    <?php endwhile; ?>
<?php else : ?>

    <p>ページが見つかりませんでした</p>

    <?php endif; ?>