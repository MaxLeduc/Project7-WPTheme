<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="icon" type="image/png" href="images/favicon.png">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>
    <?php 
      if(Is_front_page()) {?>
        <header style="background: linear-gradient(0deg, rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(<?php the_post_thumbnail_url('full');?>); background-position:center center; background-size:cover; height:100vh;">
      <?php } else if(Is_home()){ ?>
        <?php $saved_post_id = get_option('page_for_posts');?>
        <header style="background: linear-gradient(0deg, rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $saved_post_id ) );?>); background-position:center center; background-size:cover; height:40vh;position:relative;">
      <?php } else {?>
          <header style="background: linear-gradient(0deg, rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(<?php the_post_thumbnail_url('full');?>); background-position:center center; background-size:cover; height:40vh;position:relative;">
      <?php } ?>
      <div class="container container-top"> 
    <!-- social media nav -->
    <div class="top-sm">
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'sm_top'
    )); ?>
    </div>
    <div class="main-nav">
      <!-- the title -->
      <div class="container">
        <h1>
        <?php 
          if(is_home()) {?>
            <a id="logo" href="<?php echo home_url( '/' ); ?>">
              <?php $image = get_field('team_img', get_option('page_for_posts'));?>
              <img src="<?php echo $image['sizes']['thumbnail']; ?>">
              <span class="dark-grey"><?php the_field('team_name', get_option('page_for_posts'));?></span><?php the_field('team_domain', get_option('page_for_posts'));?>
            </a><?php
          } else {?>
          <a id="logo" href="<?php echo home_url( '/' ); ?>">
            <?php $image = get_field('team_img');?>
            <img src="<?php echo $image['sizes']['thumbnail']; ?>">
            <span class="dark-grey"><?php the_field('team_name');?></span><?php the_field('team_domain');?>
          </a>
          <?php
        }
        ?>
        </h1>
        <div class="nav">
            <!-- the main nav -->
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary'
            )); ?>
          <div class="hamburger">
            <span class="top-bun"></span>
            <span class="patty"></span>
            <span class="bottom-bun"></span>
          </div>
        </div>
      </div>
      <!-- Bottom line -->
  </div>
  <div class="container-bot">
  <div class="primary-bottom"></div>
  </div> <!-- /.container -->
    <?php
       if (is_front_page()) { ?>
          <div class="tag-line clearfix">
            <h1><?php the_field('tag_line'); ?></h1>
            <h3><?php the_field('sub_tag_line'); ?></h3>
            <button><span>Read more<i class="fa fa-chevron-right" aria-hidden="true"></i></span></button>
          </div>
          </div>
   <?php } else if (Is_home()){?>
            </div>
            <?php 
            $page_id = get_option('page_for_posts');
            $page = get_the_title($page_id);
             ?>
           <div class="sub-nav">
              <h6>Home / <?php echo $page; ?> </h6>
           </div>
   <?php } else {?>
         </div>
         <div class="sub-nav">
            <h6>Home / <?php the_title(); ?> </h6>
         </div>
   <?php } ?>
</header><!--/.header-->

