<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="blogContent">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h3 class="entry-title"><?php the_title(); ?></h3>

          <p>Posted on: <?php the_date('F j, Y'); ?></p>

          <div class="entry-content">
            <?php the_post_thumbnail('full'); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <!-- <?php hackeryou_posted_in(); ?> -->
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&laquo; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &raquo;'); ?></p>
        </div><!-- #nav-below -->



      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>