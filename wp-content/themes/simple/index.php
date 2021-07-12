<!DOCTYPE html>
<html <?php language_attributes(); ?>
  >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="https://use.typekit.net/cgc6pch.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
    <img class="logo" src="<?php echo get_bloginfo('template_url') ?>/assets/images/elephant.svg"/>
      <h1><?php bloginfo('name'); ?></h1>
    </header>
    <div>
        <span class="maininfo"><?php bloginfo('description'); ?></span>
    </div>
    <!-- start of your main div -->
    <div class="main">
        <div class="post-container">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
            <article class="post">
            <h3 class="post-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
                </h3>
                <?php the_content(); ?>
            </article>
            <br>
            <a href="<?php the_permalink(); ?>" class="button">Read More</a>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, no posts were found'); ?>
        <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>
  </body>
</html>
