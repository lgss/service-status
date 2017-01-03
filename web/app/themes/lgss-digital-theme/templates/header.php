<header class="header">
  <div class="top row">

    <?php if(has_post_thumbnail()) { ?>
    <div class="span8">
      <div class="blog-title__image">
        <?php the_post_thumbnail(); ?>
      </div>
      <h1 class="blog"><a href="<?php echo home_url() ?>"><?php the_title(); ?></a></h1>
      <h1 class="blog-title"><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></h1>
    </div>
    <?php } else { ?>

    <?php $logo_options = get_option('theme_logo_options'); ?>

    <div class="span8">
      <h1 class="blog"><a href="<?php echo home_url() ?>">LGSS</a></h1>
      <h1 class="blog-title"><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></h1>
    </div>
    <?php } ?>

    <?php if ($logo_options['logo']): ?>
      <div class="span4 logo-container hidden-mobile">
        <img src="<?php echo $logo_options['logo']; ?>" alt="Logo for <?php bloginfo('name')?>" />
      </div>
    <?php else : ?>
      <div class="span4 search-container visible-desktop">
        <?php get_search_form() ?>
      </div>
    <?php endif ?>
  </div>
</header>
