<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post(); ?>
<?php if( have_rows('banner_slider') ): ?>
<section class="section section--banner">
    <div class="wrap">
        <div class="banner__slider owl-carousel owl-theme">
            <?php  while( have_rows('banner_slider') ): the_row();  ?>
            <div class="item">
                 <?php if(get_sub_field('image') ){ ?>
                <div class="banner__image">
                    <?php echo wp_get_attachment_image( get_sub_field('image'), 'full'); ?>
                </div>
                <?php } ?>
                <div class="banner__content">
                    <?php if(get_sub_field('top_title') ){ ?>
                    <p><?php the_sub_field('top_title'); ?></p>
                    <?php } ?>

                    <?php if(get_sub_field('main_title') ){ ?>
                    <h1><?php the_sub_field('main_title'); ?></h1>
                    <?php } ?>

                    <?php if(get_sub_field('info') ){ ?>
                    <p><?php the_sub_field('info'); ?></p>
                    <?php } ?> 
                </div>
            </div>
            <?php endwhile; ?>
        </div>
   </div>
</section>
<?php endif; ?>

<?php if( have_rows('continue_video') ): ?>
<section class="section section--continue">
    <div class="wrap">
        <?php if(get_field('continue_heading') ){ ?>
        <h2><?php the_field('continue_heading'); ?></h2>
        <?php } ?> 
        <div class="continue__video owl-carousel owl-theme">
            <?php  while( have_rows('continue_video') ): the_row();  ?>
            <div class="item">
                <?php echo wp_get_attachment_image( get_sub_field('video'), 'full'); ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( have_rows('trending_poster') ): ?>
<section class="section section--trending">
    <div class="wrap">
        <div class="title">
            <?php if(get_field('trending_heading') ){ ?>
            <h2><?php the_field('trending_heading'); ?></h2>
            <?php } ?>
            <a href="#">More</a>
        </div>
        <div class="row">
            <?php  while( have_rows('trending_poster') ): the_row();  ?>
            <div class="col-2 col-md-4 col-xs-6 col-xxs-12 mb-md-32">
                <?php echo wp_get_attachment_image( get_sub_field('poster'), 'full'); ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endwhile; // End of the loop.
get_footer();

