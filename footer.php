<hr />
    <footer>
        <nav role="navigation">
                <?php  bones_footer_links(); ?>
        </nav>

        <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
        <?php if( current_user_can('activate_plugins') ) edit_post_link(); ?>
    </footer>
</div> <!-- /container -->




<?php wp_footer(); ?>

</body>

</html>
