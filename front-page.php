<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZmartOffcial
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">


            <?php $opt7 = new WP_Query('cat=7'); ?>
            <?php $opt8 = new WP_Query('cat=8'); ?>
            <?php $neki = wp_get_attachment_image_src( get_post_thumbnail_id(64), 'single-post-thumbnail' );?>

            <!-- Sixth DIV-->
            <div id="id6" class="container-fluid" style="background-image: url('<?php echo $neki[0]; ?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1><?php echo get_cat_name(8); ?></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6"></div>

                        <div class="col-lg-6">
                            <?php
                            if($opt8->have_posts()) : while($opt8->have_posts()) : $opt8->the_post(); ?>
                                <p><?php the_content(); ?></p>
                            <?php
                            endwhile;
                            else: ?>
                                <h1>No posts here!</h1>
                            <?php
                            endif; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-9"></div>

                        <div class="col-lg-3">
                            <a href="#" class="btn btn-warning">MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seventh DIV-->
            <div id="id7" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <h1><?php echo get_cat_name(7); ?></h1>

                            <?php
                            while(have_posts()) : the_post(); ?>

                                <p><?php the_content(); ?></p>

                            <?php
                            endwhile; // End of the loop.
                            ?>


                            <?php
                            if($opt7->have_posts()) : while($opt7->have_posts()) : $opt7->the_post(); ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            <?php
                            endwhile;
                            else: ?>
                                <h1>No posts here!</h1>
                            <?php
                            endif; ?>

                        </div>
                    </div>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();