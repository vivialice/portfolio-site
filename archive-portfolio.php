<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail('large');
        } 
        ?>
        <?php the_content(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><strong>Client Name: </strong><?php the_field('client_name'); ?></p>
        <p><?php the_field('short_description'); ?></p>

        <?php the_terms($post->ID, 'technologies', '', ' | '); ?>

        <div class="images">
        	<?php while(has_sub_field('images')) : ?>
				<?php // for every image/caption combo, this code is run ?>
				<figure>
					<?php $image = get_sub_field('image'); ?>
					 <img src="<?php echo $image['sizes']['square']; ?>" alt="">
					<figcaption><?php the_sub_field('caption'); ?></figcaption>
				</figure>
        	<?php endwhile; //end images loop ?>

        </div><!-- /.images -->

        <?php //the_content(); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>