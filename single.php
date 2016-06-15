<?php get_header(); ?>

<div class="main">
  <div class="container container-single">
    <div class="content individual-post">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php 
         echo '<div class="post-img" style="background:url(\'';
         echo catch_that_image();
         echo '\'); background-size:cover; background-position: center 0%;">';

         echo '<div class="triangle"></div>';
         echo '</div>';
        ?>
        <div class='post-information'>
          <i class="fa fa-calendar" aria-hidden="true"></i><h6><?php the_time('F j, Y');?></h6>
          <i class="fa fa-user" aria-hidden="true"></i><h6><?php the_author()?></h6>
        </div>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><?php the_title(); ?></h2>

          <div class="entry-content">
            <p><?php echo preg_replace("/\< *[img][^\>]*[.]*\>/i","",get_the_content(),1); ?></p>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <p><?php hackeryou_posted_in(); ?></p>
          </div><!-- .entry-utility -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
    <?php get_sidebar(); ?>

</div> <!-- /.main -->

<?php get_footer(); ?>