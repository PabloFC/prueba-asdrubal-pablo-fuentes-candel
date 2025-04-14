<?php get_header(); ?>
<?php if (is_front_page()): ?>
    <?php include('includes/seccion-1.php'); ?>
    <?php include('includes/seccion-2.php'); ?>
    <?php include('includes/seccion-3.php'); ?>
<?php endif; ?>
<?php get_footer(); ?>