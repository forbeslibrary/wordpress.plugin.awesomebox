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
  <div id="container_wrap" class="container-pagewithposts equal_height right-1-col">
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
  <div id="sidebar_wrap_right" class="right-1-col equal_height">
    <div id="sidebar_primary" class="widget-area" role="complementary">
      <h3 class="widget-title">Tags</h3>
      <?php
      $categories = '';
      if (is_tax()) {
        global $wp_query;
        $term = $wp_query->get_queried_object();
        $categories = $helper->get_limited_taxonomy_ids( array(
          'taxonomy' => 'awesomebox_categories',
          'term' => array(
            'taxonomy' => $term->taxonomy,
            'term_id' => $term->term_id
          )
        ));
        wp_tag_cloud( array(
          'taxonomy' => 'awesomebox_categories',
          'include' => implode(' ', $categories)
        ));
      } else {
        wp_tag_cloud( array(
          'taxonomy' => 'awesomebox_categories',
        ));
      }
      ?>
    </div>
  </div>
</div>
<?php
get_footer();
