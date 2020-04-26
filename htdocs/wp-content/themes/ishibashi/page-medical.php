<?php
/**
 * Template Name: page-medical
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
  
  
  <!-- medical  -->
  <?php get_template_part( 'commons/pagetit' ); ?>
  <?php get_template_part( 'medical/contents' ); ?>
  <div class="medical-contents-items">
    <?php get_template_part( 'medical/mainsymptom' ); ?>
    <?php get_template_part( 'medical/riumachi' ); ?>
    <?php get_template_part( 'medical/makizume' ); ?>
    <?php get_template_part( 'medical/rihabiri' ); ?>
    <?php get_template_part( 'medical/ziko' ); ?>
  </div>
  <?php get_template_part( 'medical/setsubi' ); ?>
  <?php get_template_part( 'medical/onegai' ); ?>
  <!-- footer -->
  <?php get_template_part( 'commons/other' ); ?>
  <?php get_template_part( 'commons/map' ); ?>
  <?php get_template_part( 'commons/footer' ); ?>
</body>
