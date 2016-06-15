<?php get_header();  ?>

<div class="main">
  <section class="about">
    <div class="container">
      <div class="about-content">
        <?php $BGimage = get_field('quote_image');?>
        <div class="about-team">
          <h2>ABOUT TEAM</h2>
          <p class="abstract"><?php the_field('abstract');?></p>
          <p><?php the_field('team_description');?></p>
        </div>
        <div class="quote-img">
          <figcaption>
            <div class="quote">
              <h3><?php the_field('quote');?></h3>
              <h6>- <?php the_field('quote_author');?></h6>
            </div>
          </figcaption>
        </div>
      </div> <!-- /,content -->
    </div> <!-- /.container -->
  </section>
</div> <!-- /.main -->

<?php get_footer(); ?>