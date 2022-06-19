<?php get_header(); ?>

	<div class="row">
	<div class="col-sm-12">

		<!--<404 post content>-->
		<div class="bw_error">
			
			<div class="bw_error_satu">
				<div class="bw_error_posts"><?php _e('Page not found.', 'bw_translate'); ?></div>
				<div class="bw_error_posts_desc"><?php _e('The page you are looking for might have been removed, or is temporarily unavailable.', 'bw_translate'); ?></div>
			</div>
			
			<div class="bw_error_dua">
				<span><?php _e('Recent Posts:', 'bw_translate'); ?></span>
				<ul>
				<?php wp_get_archives( array(
					'type' => 'postbypost', 
					'limit' => 10,
					'before' => '', 
					'order'  => 'DESC',
					'after' => '' ) 
				); ?>
				</ul>
			</div>
			
		</div>
		<!--</404 post content>-->
	
	</div>
	</div>

<?php get_footer(); ?>