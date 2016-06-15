<?php get_header();  ?>

<div class="main">

<section class="about">
  <div class="container">
    <div class="about-team">
        <h2><span class="yellow">About</span> Team</h2>
        <p class="abstract"><?php the_field('abstract');?></p>
        <p><?php the_field('team_description');?></p>
        <button>READ MORE</button>
    </div>
    <div class="stadium-image">
      <figcaption>
        <div class="quote">
        <h3><?php the_field('quote');?></h3>
        <h6>- <?php the_field('quote_author');?></h6>
        </div>
      </figcaption>
    </div>
  </div>
</section>

<section class="our-news">
  <div class="container">
    <h2><span class="yellow">Our</span> News</h2>
    <p class='news-tag'><?php the_field('news_tag_line');?></p>

    <div class="featured-posts">
     <?php
     query_posts('posts_per_page=2'); /*1, 2*/
     if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
       <div class="post" id="post">
            <?php 
             echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
             echo '<div class="featured-img" style="background:url(\'';
             echo catch_that_image();
             echo '\'); background-size:cover; background-position:center;">';
             echo '<div class="triangle"></div><figcaption id="featured-img"></figcaption>';
             echo '</div>';
             echo '</a>';
            ?>
          <aside class="post-preview">
            <h6><?php the_time('F j, Y');?></h6>
             <h5><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h5>
             <?php the_excerpt(); ?>
              </div>
             <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
         </aside>
        </div>

    <button>ALL NEWS</button>
  </div>
</section>

</div> <!-- /.main -->

<?php get_footer(); ?>