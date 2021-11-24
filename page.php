<?php get_header() ?>

<!-- pタグ自動挿入制限 start-->
<?php remove_filter('the_content', 'wpautop'); ?>
<!-- pタグ自動挿入制限 stop -->

<?php
if (have_posts()) :
 while (have_posts()) :
  the_post();
  the_content();
 endwhile;
endif;
?>

<?php get_footer(); ?>