<?php get_header(); ?>

	<!--<the_loop>-->
	<?php if ( have_posts() ) : ?>
	<?php while (have_posts()) : the_post(); ?>	
	
	<div class="row">
		<div class="col-md-8 col-sm-12 col-xs-12 bw_left bw_left_single">
		
			<!--<video>-->
			<?php if ( get_post_meta( get_the_ID(), '_pt_embed_video_textarea_code', true ) ) : ?>
				<?php $videogem = get_post_meta( get_the_ID(), '_pt_embed_video_textarea_code', true ); echo $videogem; ?>
			<?php else : ?>
			<?php endif; ?>
			<!--</video>-->
		
			<!--<breadcrumb>-->
			<?php if ( function_exists( 'yoast_breadcrumb' ) ) { yoast_breadcrumb('<div class="bw_breadcrumb_post">', '</div>'); } ?>
			<!--</breadcrumb>-->
			
			<!--<post_class>-->
			<div <?php post_class( '' ); ?>>
				<h1 class="bw_h1title_single"><?php echo get_the_title(); ?></h1>
				
				<div class="row margin_bt20 bw_img_crew">
					<div class="col-md-3 col-xs-5 bw_mob_right">
						<?php if (has_post_thumbnail()) { ?>
							<img class="bw_poster" alt="<?php the_title_attribute(); ?>" src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'img200300', true); echo $image_url[0]; ?>">
						<?php } else { ?>
							<img class="bw_poster" alt="<?php the_title_attribute(); ?>" src="<?php echo get_template_directory_uri(); ?>/images/nophoto.png" />
						<?php } ?>
					</div>

					<div class="col-md-9 col-xs-7">
						<div class="bw_crew"><?php echo get_the_term_list( $post->ID,'director', '<strong>Director</strong> ', ', ', '' ); ?></div>
						<div class="bw_crew"><?php echo get_the_term_list( $post->ID,'writer', '<strong>Writer</strong> ', ', ', '' ); ?></div>
						<div class="bw_crew"><?php echo get_the_term_list( $post->ID,'artist', '<strong>Artist</strong> ', ', ', '' ); ?></div>
						<div class="bw_crew"><?php echo get_the_term_list( $post->ID,'genre', '<strong>Genre</strong> ', ', ', '' ); ?></div>
					</div>
				</div>			
				
					<div class="bw_desc">
						<?php the_content(); ?>
						<?php wp_link_pages( 'before=<div id="bw_post_pages">Pages &after=</div>&link_before=<span>&link_after=</span>' ); ?>
					</div>
					
					<!--<tags>-->
					<?php if( get_the_tags() ) { ?>
						<div class="bw_tags">
							<?php the_tags( '<div><span>', '</span><span>', '</span></div>' ); ?>
						</div>
					<?php } ?>
					<!--</tags>-->				
					
					<!--<date>-->
					<div class="bw_blog_items">
						<?php the_time('M j, Y') ?> -
						<?php _e('Posted by', 'bw_translate'); ?>
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> 
						<?php edit_post_link('- Edit This Post', '', ''); ?>
						- <?php if (comments_open()) : ?><?php comments_number(__('No Comments', 'bw_translate'), __('1 Comment', 'bw_translate'), __( '% Comments', 'bw_translate') );?><?php endif; ?>
					</div>
					<!--</date>-->
					
					<!--<author card>-->
					<?php get_template_part( 'author_card' ); ?>
					<!--</author card>-->				

					<!--<default comments>-->
					<?php comments_template( '', true ); ?>
					<!--</default comments>-->
					
			</div>
			<!--<post_class>-->
		</div>
		
		<!--<sidebar>-->
		<?php get_template_part( 'sidebar' ); ?>
		<!--</sidebar>-->	
		
	</div>

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	</div>
	<!--</the_loop>-->
	
<?php get_footer(); ?>