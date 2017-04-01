	<?php $shortname = "typographic"; ?>
	<div class="clear"></div>
	<footer id="footer">
		<div class="left">
			<?php if(get_option($shortname.'_deviantart_link','') != "") { ?>
				<a href="<?php echo get_option($shortname.'_deviantart_link',''); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/deviantart-icon.png" alt="deviantart" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_twitter_link','') != "") { ?>
				<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" alt="twitter" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_facebook_link','') != "") { ?>
				<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-icon.png" alt="facebook" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_google_plus_link','') != "") { ?>
				<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/google-plus-icon.png" alt="google plus" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_dribbble_link','') != "") { ?>
				<a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/dribbble-icon.png" alt="dribbble" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_pinterest_link','') != "") { ?>
				<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_behance_link','') != "") { ?>
				<a href="<?php echo get_option($shortname.'_behance_link',''); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/behance-icon.png" alt="behance" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_linkedin_link','') != "") { ?>
				<a href="<?php echo get_option($shortname.'_linkedin_link',''); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-icon.png" alt="linkedin" /></a>
			<?php } ?>
			<div class="clear"></div>
		</div>
		<div class="right">Sylvie M Créations &copy; 2015 SylvieMCreations</div>
		<div class="clear"></div>
	</footer><!--//footer-->

 </section><!--//main_container-->

 <?php wp_footer(); ?>
 </body>
 </html>
