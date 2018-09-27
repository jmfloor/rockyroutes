    <footer>
       <div class="flex_container">
            <div class="flex_item">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </div>
            <div class="flex_item">
                <p class="footer_site_text">
                    Footer Text goes here
                    <?php

                    ?>
            </div>
       </div>

    </footer>
    <?php wp_footer(); ?>
</body>
</html>