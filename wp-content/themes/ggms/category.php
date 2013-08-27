<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 ?>

<!DOCTYPE html >

<html>

    <head>
        <title>Girls Guide to Middle School</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link href='http://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Crafty+Girls' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>

    <body>

        <div id="top">
            <div id="topTitle">
                Girls Guide
            </div>
            <div id="middleTitle">
                to
            </div>
            <div id="bottomTitle">
                Middle School
            </div>
        </div>
        <div id="main">
            <div id="mainNav">
                <ul>
                    <li>
                        <a href="#">School</a>
                    </li>
                    <li>
                        <a href="#">Life</a>
                    </li>
                    <li>
                        <a href="#">Friends</a>
                    </li>
                    <li>
                        <a href="#">Teacher's Notes</a>
                    </li>
                    <li>
                        <a href="#">Boys' Corner</a>
                    </li>
                </ul>
            </div>
            <div id="mainContent">
  
        <?php if ( have_posts() ) : ?>
            <header class="archive-header">
                <h1 class="archive-title"><?php printf( __( 'Permanent Records: %s', 'ggms' ), single_cat_title( '', false ) ); ?></h1>

                <?php if ( category_description() ) : // Show an optional category description ?>
                <div class="archive-meta"><?php echo category_description(); ?></div>
                <?php endif; ?>
            </header><!-- .archive-header -->

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

            <?php twentythirteen_paging_nav(); ?>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

            </div>
        </div>
    <?php wp_footer(); ?>
    </body>

</html>

