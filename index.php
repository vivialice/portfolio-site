<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

	
    <div class="blogContent">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.blogContent -->



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>