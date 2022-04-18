    <footer class="container-fluid text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 widgetleft">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_left') ) :
                    endif; ?>
                </div> <!-- col-md-6 -->
                <div class="col-md-6">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_right') ) :
                endif; ?>
                </div> <!-- col-md-6 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </footer>
<?php wp_footer(); ?>
</body>
</html>