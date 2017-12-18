<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZmartOffcial
 */

?>

<footer class="site-footer">

    <div class="container-fluid" id="r1"></div>
    <div class="container-fluid" id="r2">
        <div class="container">

            <div class="row">

                <div class="col-lg-2" id="logo">
                    <?php the_custom_logo(); ?>
                    <div id="zmart"><?php bloginfo('name'); ?></div>
                </div>

                <div class="col-lg-2" id="menu">
                    <?php wp_nav_menu(
                        array(
                            'menu'           => 'primary',
                            'theme_location' => 'primary'
                        )); ?>
                </div>

                <div class="col-lg-6" id="menu">
                    <?php wp_nav_menu(
                        array(
                            'menu'           => 'secondary',
                            'theme_location' => 'secondary'
                        )
                    ); ?>
                </div>
                <div class="col-lg-2" id="menu">
                    <ul>
                        <li>FOLLOW US</li>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/facebook.png" class="fb"> <img src="<?php bloginfo('template_url'); ?>/img//twitter.png" class="tw"></li>

                    </ul>
                </div>
            </div>


        </div>
    </div>
    <div class="container-fluid" id="r3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>
                </div>

            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js ?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
