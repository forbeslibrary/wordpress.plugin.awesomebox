<?php
/*
Template Name: Archive Staff Pick
Description: This template is used to display staff pick archive pages.
*/
$post = get_post();

$helper = new Awesomebox_Helper();

get_header();
?>
<div id="main">
  <div id="container_wrap" class="container-pagewithposts equal_height">
    <?php if (function_exists('weaverii_get_paginate_archive_page_links')): ?>
      <div id="infobar">
        <span class='infobar_right'>
          <span id="infobar_paginate">
            <?php echo weaverii_get_paginate_archive_page_links( 'plain', 2, 2 ); ?>
          </span>
        </span>
      </div>
    <?php else: ?>
      <?php posts_nav_link(); ?>
    <?php endif; ?>
    <div id="content">
      <h1 class="entry-title">
        <?php echo $helper->get_title(); ?>
      </h1>
      <?php echo get_option('awesomebox_settings_archive_text'); ?>
      <div id="awesomebox-content">
        <?php if ( have_posts() ): ?>
          <?php while ( have_posts() ): ?>
            <?php
            the_post();
            load_template( dirname( __FILE__ ) . '/content-awesomebox.php', False );
            ?>
          <?php endwhile; ?>
        <?php else: ?>
          <?php echo __('Nothing found'); ?>
        <?php endif; ?>
      </div>
      <?php if (function_exists('weaverii_get_paginate_archive_page_links')): ?>
        <nav id="nav-below">
          <?php echo weaverii_get_paginate_archive_page_links( 'plain', 2, 2 ); ?>
        </nav>
        <div class="weaver-clear"></div>
      <?php else: ?>
        <?php posts_nav_link(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php
get_footer();
