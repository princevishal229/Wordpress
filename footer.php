</main>


      <?php
         if(has_nav_menu('footer-menu')){
            wp_nav_menu(array('theme-location' => 'footer-menu'));
            }
          ?>
   
<footer>
    <p>&copy; Copyrights <a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>.All Rights Reserved</p>
</footer>

<?php dynamic_sidebar('footer_sidebar');?>
<?  php wp_footer() ?>

</body>
</html>


