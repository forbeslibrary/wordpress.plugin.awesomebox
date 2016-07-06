<?php
/*
Template Name: Content Awesomebox
Description: A partial tempalte used to display Awesomebox content.
*/
$custom = get_post_custom($post->ID);
$metadata = maybe_unserialize(
  $custom["awesomebox_metadata"][0]
);

ob_start();?>
<article id="post-<?php $post->ID ?>" class="awesomebox post hentry">
<div class="entry-content">
  <a href="<?php echo $metadata['catalog_url']; ?>"
    class="wp-caption book-jacket-caption">
    <?php
    $alt_text = the_title();
    if (!empty($metadata['author'])) {
      $alt_text = $alt_text . ' / ' . $metadata['author'];
    }
    echo get_the_post_thumbnail(
      $post->ID,
      'medium',
      array(
        'alt' => $alt_text,
        'class' => 'book-jacket'
      ))
      ?>
  </a>
  <?php echo apply_filters('the_content', $post->post_content); ?>
</div>
<?php if (is_user_logged_in()): ?>
  <footer class="entry-utility"><span class="edit-link"><?php edit_post_link('Edit Awesomebox Item'); ?></span></footer>
<?php endif; ?>
</article><?php
