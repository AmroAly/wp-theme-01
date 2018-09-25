
    <footer class="main-footer">
        <div class="container">
            <div class="f-left">
                <p>&copy; 2018 - Advanced WP</p>
            </div>
            <div class="f-right">
            <?php
            $args = [
                'theme_location' => 'footer',
            ]; ?>
            <?php wp_nav_menu($args); ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>