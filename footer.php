<footer>
<div class="container">
<div class="top-nav">
<div class="footer-left">
  <div class="footer-left-top">

  		<?php
  		if(Is_home()){?>
  		<?php $footer_image = get_field('footer_logo', get_option('page_for_posts'));?>
  		<div class="team-info">
			  <img src="<?php echo $footer_image['sizes']['thumbnail'] ?>">
			  <h3><span class="yellow"><?php the_field('team_name', get_option('page_for_posts'));?></span><?php the_field('team_domain', get_option('page_for_posts'));?></h3>
	  	</div>
	  <?php wp_nav_menu( array(
	    'container' => false,
	    'theme_location' => 'sm_top'
	  )); ?>
	    </div>
	      <?php $footer_text = get_field('footer_text_block', get_option('page_for_posts'))?>
		  <p class="footer-text"><?php echo $footer_text;?></p>
		</div>
  		<?php } else if (Is_front_page()){ ?>
  		<div class="team-info">
			  <?php $imageTeam = get_field('footer_logo'); ?>
			  <img src="<?php echo $imageTeam['sizes']['thumbnail']; ?>">
			  <h3><span class="yellow"><?php the_field('team_name'); ?></span><?php the_field('team_domain');?></h3>
		</div>
	  <?php wp_nav_menu( array(
	    'container' => false,
	    'theme_location' => 'sm_top'
	  )); ?>
		  </div>
		  <p class="footer-text"><?php the_field('footer_text_block'); ?></p>
		</div>
  		<?php } else { ?>
  		<div class="team-info">
		  <?php $imageTeam = get_field('footer_logo'); ?>
		  <img src="<?php echo $imageTeam['sizes']['thumbnail']; ?>">
		  <h3><span class="yellow"><?php the_field('team_name'); ?></span><?php the_field('team_domain');?></h3>
		 </div>
		  <?php wp_nav_menu( array(
		    'container' => false,
		    'theme_location' => 'sm_top'
		  )); ?>
			  </div>
			  <p class="footer-text"><?php the_field('footer_text_block'); ?></p>
			</div>
  		<?php } ?>

<div class="footer-right">
  <h3><span class="yellow">Latest</span> Tweets</h3>
  <a class="twitter-timeline" href="https://twitter.com/impactmontreal" data-widget-id="739571834107088897">Tweets de @impactmontreal</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>
<div class="bottom-nav">
	
	<?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'bottom_footer'
    )); ?>
	<?php if(Is_home()){?>
		<h6>Copyrights <?php the_field('year', get_option('page_for_posts'));?> <a href="#"><?php the_field('company_name', get_option('page_for_posts'));?></a>. All right reserved</h6>
	<?php } else { ?>
		<h6>Copyrights <?php the_field('year');?> <a href="#"><?php the_field('company_name');?></a>. All right reserved</h6>
	<?php } ?>

</div>
</div> <!-- container -->
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>