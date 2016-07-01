<?php
/*
Template Name: Single Staff Pick
Description: This tempalte is used when a single awesomebox is displayed on a page of its own.
*/
$post = get_post();

get_header();
?>
<div id="content">
<?php load_template( dirname( __FILE__ ) . '/content-awesomebox.php', False ); ?>
</div>
<?php
get_footer();
