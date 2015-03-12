<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>

<div class="main">
	<div class="container">
		
		<div class="aboutContainer clearfix">
			<div class="aboutLeft">
				<h2>Good Morning</h2>
				<div class="line"></div><!-- /.line -->
			</div><!-- /.aboutLeft -->

			<div class="aboutRight">
				<?php echo the_field('about_copy'); ?>
			</div><!-- /.aboutRight -->
		</div><!-- /.aboutContainer -->

	</div> <!-- /.container -->

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

    <?php // pull 6 portfolio pieces ?>
	<?php $latestPosts = new WP_Query(array(
		'post_type' => 'portfolio', 
		'posts_per_page' => 6
	)); ?>

	<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
			<a href="<?php echo get_permalink(); ?>">
				<div class="portfolioContent">
					<h2><?php the_title(); ?></h2>
					<?php the_terms($post->ID,'technical_skills', '', ''); ?>
				</div><!-- /.portfolioContent -->
					<?php the_post_thumbnail( 'homepage-thumb' ); ?>
			</a>

	<?php endwhile // end custom loop ?>
	<?php wp_reset_postdata(); // return end, must do on all custom queries ?>

	<?php echo do_shortcode( get_field('contact_form') ); ?>


</div> <!-- /.main -->

<?php get_footer(); ?>