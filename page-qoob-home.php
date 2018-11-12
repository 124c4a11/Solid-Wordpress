<?php
/**
 * Template name: Home page for Qoob
 */

get_header('home');
?>

<?php
  while ( have_posts() ) : the_post();

    the_content();

  endwhile;
?>

<?php get_footer('home'); ?>