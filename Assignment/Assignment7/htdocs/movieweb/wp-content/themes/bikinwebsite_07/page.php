<?php get_header(); ?>

	<!--<the_loop>-->
	<?php if ( have_posts() ) : ?>
	<?php while (have_posts()) : the_post(); ?>	
	
	<div class="row">
	<div class="col-sm-12">
	
		<?php if ( function_exists( 'yoast_breadcrumb' ) ) { yoast_breadcrumb('<div class="bw_breadcrumb_post">', '</div>'); } ?>

		<!--<post_class>-->
		<div <?php post_class( 'bw_bcgwhite padding15' ); ?>>
			<h1 class="bw_h1title_single"><?php echo get_the_title(); ?></h1>
			
				<div class="bw_desc">
					<?php the_content(); ?>
					<?php wp_link_pages( 'before=<div id="bw_post_pages">Pages &after=</div>&link_before=<span>&link_after=</span>' ); ?>
				</div>
				
				<!--<date>-->
				<div class="bw_blog_items">
					<?php the_time('M j, Y') ?> -
					<?php _e('Posted by', 'bw_translate'); ?>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> 
					<?php edit_post_link('- Edit This Post', '', ''); ?>
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
	</div>

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	</div>
	<!--</the_loop>-->
	
<?php get_footer(); ?>