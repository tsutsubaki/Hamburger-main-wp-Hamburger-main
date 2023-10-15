<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <section class="p-figcaption__1 p-figcaption">
            <figure class="p-archive__image">
                <?php the_post_thumbnail(); ?>
            </figure>

            <div class="p-theme ">
                <div class="p-figcaption__title-1"><?php the_title(); ?></div>
                <div class="p-second__title">小見出しが入ります</div>
                <p class="p-theme__service"><?php the_excerpt(); ?></p>
                <button class="p-button" type="button">
                    <a href="<?php the_permalink(); ?>">詳しく見る</a></button>
            </div><!--p-theme-->
        </section>

    <?php endwhile; ?>
<?php else : ?>

    <p>ページが見つかりませんでした</p>

<?php endif; ?>