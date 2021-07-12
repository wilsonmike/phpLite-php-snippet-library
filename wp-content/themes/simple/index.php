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
      <h1><?php bloginfo('name'); ?></h1>
      <span><?php bloginfo('description'); ?></span>
    </header>
    <!-- start of your main div -->
    <div class="main">
        <div class="post-container">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?>
                <h3 class="post-title"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, no posts were found'); ?>
        <?php endif; ?>
        </div>
    </div>
  </body>
</html>
