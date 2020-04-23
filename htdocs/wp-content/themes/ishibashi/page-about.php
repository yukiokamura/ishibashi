<?php
/**
 * Template Name: page-about
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 */
 
 
?>

<!-- header -->
<?php get_template_part( 'commons/head' ); ?>


<!--body-->
<body>
  
  <?php get_template_part( 'commons/header' ); ?>
  <?php get_template_part( 'commons/scroll-header' ); ?>
  
  
  <!-- about  -->
  <?php get_template_part( 'commons/pagetit' ); ?>
  <?php get_template_part( 'about/mv' ); ?>
  <?php get_template_part( 'about/kamoku' ); ?>
  <?php get_template_part( 'about/shoukai' ); ?>
  <?php get_template_part( 'about/greeting' ); ?>
  <!-- footer -->
  <?php get_template_part( 'commons/map' ); ?>
  <?php get_template_part( 'commons/footer' ); ?>
</body>
