<?php
/**
 * Template Name: page-infomation
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
  
  
  <!-- infomation  -->
  <?php get_template_part( 'commons/pagetit' ); ?>
  <?php get_template_part( 'infomation/main' ); ?>

  <!-- footer -->
  <?php get_template_part( 'commons/other' ); ?>
  <?php get_template_part( 'commons/map' ); ?>
  <?php get_template_part( 'commons/footer' ); ?>
</body>
