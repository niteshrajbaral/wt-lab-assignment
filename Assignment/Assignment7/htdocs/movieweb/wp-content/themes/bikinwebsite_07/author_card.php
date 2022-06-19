<?php if( get_the_author_meta('_ptuser_upload_bio_info') ) { ?>
	<div class="bw_author_post">
		<div class="bw_author_post_items">
		
			<?php if( get_the_author_meta('_ptuser_upload_avatar') ) { ?>
			<div class="bw_author_pic pt_lazy_img">
				<img class="bw_avatar" src="<?php echo get_the_author_meta( '_ptuser_upload_avatar' ); ?>">
			</div>
			<?php } ?>
						
			<div class="bw_author_name_desc">
				<div class="bw_author_name">
					<h4><?php the_author_posts_link(); ?></h4>
				</div>

				<div class="bw_author_desc">
					<?php echo get_the_author_meta( '_ptuser_upload_bio_info' ); ?>
				</div>

				<div class="bw_author_socialsite">
					<?php if( get_the_author_meta('_ptuser_websiteurl') ) { ?><a title="Personal Website" target="_blank" href="<?php echo get_the_author_meta( '_ptuser_websiteurl' ); ?>"><i class="fa fa-link"></i></a><?php } ?>
					<?php if( get_the_author_meta('_ptuser_facebookurl') ) { ?><a title="Facebook" target="_blank" href="<?php echo get_the_author_meta( '_ptuser_facebookurl' ); ?>"><i class="fa fa-facebook"></i></a><?php } ?>
					<?php if( get_the_author_meta('_ptuser_twitterurl') ) { ?><a title="Twitter" target="_blank" href="<?php echo get_the_author_meta( '_ptuser_twitterurl' ); ?>"><i class="fa fa-twitter"></i></a><?php } ?>
					<?php if( get_the_author_meta('_ptuser_googleplusurl') ) { ?><a title="Google Plus" target="_blank" href="<?php echo get_the_author_meta( '_ptuser_googleplusurl' ); ?>"><i class="fa fa-google-plus"></i></a><?php } ?>
					<?php if( get_the_author_meta('_ptuser_linkedinurl') ) { ?><a title="Linkedin" target="_blank" href="<?php echo get_the_author_meta( '_ptuser_linkedinurl' ); ?>"><i class="fa fa-linkedin"></i></a><?php } ?>
					<?php if( get_the_author_meta('_ptuser_instagramurl') ) { ?><a title="Instagram" target="_blank" href="<?php echo get_the_author_meta( '_ptuser_instagramurl' ); ?>"><i class="fa fa-instagram"></i></a><?php } ?>
					<?php if( get_the_author_meta('_ptuser_pinteresturl') ) { ?><a title="Pinterest" target="_blank" href="<?php echo get_the_author_meta( '_ptuser_pinteresturl' ); ?>"><i class="fa fa-pinterest-square"></i></a><?php } ?>
				</div>
				
			</div>	
		</div>
	</div>
<?php } ?>
