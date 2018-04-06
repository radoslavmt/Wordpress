    <footer class="site-footer">
    <nav class="site-nav">

        <?php
            $args = array(
                'theme_location' => 'footer'
            );

        ?>

        <?php wp_nav_menu( $args); ?>
    </nav>

        <p><?php bloginfo('author'); ?> - &copy; <?php echo date('Y'); ?></p>
    </footer>

</div> <!-- container end -->

<?php wp_footer(); ?>
</body>
</html>