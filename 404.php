<?php

/**
 * The template for displaying 404 pages (not found)
 */
?>

<!-- 404.php -->

<?php get_header(); ?> <!-- header.php読み込み -->

<div class="container">
    <h1>404 Not Found</h1>
    <p>ページが見つかりませんでした</p>
    <a href="<?= get_site_url(); ?>">トップページへ戻る</a>
    <!-- <p>Topページは<a href="<?php echo esc_url(home_url('/')); ?>">こちら</a></p> -->

</div>
<?php get_footer(); ?>
<?php get_sidebar(); ?>