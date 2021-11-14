<?php
/*
 * Template Name: Front page
t*/ ?>

<?php get_header(); ?>

<div id="home" class="home">
    <div class="container">
        <div class="home__main-text">
            <?php the_field('main_text') ?>
        </div>
        <div class="home__three-block-text">
            <?php the_field('text_1') ?>
            <?php the_field('text_2') ?>
            <?php the_field('text_3') ?>
        </div>
    </div>
    <div class="home__image-full">
        <div class="img-container">
            <img src="<?php the_field('image') ?>" alt="">
        </div>
        <span class="home__image-desc"><?php the_field('image_description') ?></span>
    </div>
</div>

<?php get_footer(); ?>
