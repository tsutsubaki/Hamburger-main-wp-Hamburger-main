<footer class="l-footer ">


    <?php if (has_nav_menu('footer_nav')) : ?>

      <?php wp_nav_menu(array(
        'theme_location' => 'footer_nav',
        'container'     => '',
        'menu_class'    => 'p-footer__list',
         // 'items_wrap' => '%3$s', //<ul>を出力しない
        // 'link_before' => '<span class="l-footer__item">',
        // 'link_after' => '</span>'
        
      )); ?>

  <small class="l-footer_copyright">Copyright: RaiseTeck</small>

</footer>

<?php endif; ?>
</main>



<!-- javascriptファイル -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="scss/js/script.js"></script> -->


<?php wp_footer(); ?>

</body>

</html>