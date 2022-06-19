<?php get_header(); ?>

<!--<bw_index>-->
<div class="row">

	<!--<the_loop - index>-->
	<?php if ( have_posts() ) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<!--<blog_list>-->
		<div class="col-md-2 col-sm-3 col-xs-6">
			<div <?php post_class( 'bw_postlist margin_bt20' ); ?>>
					<!--<bw_index_row>-->
					<div class="bw_thumb_title">
						<!--<thumbnail>-->
						<div class="bw_thumb">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<?php if (has_post_thumbnail()) { ?>
									<img class="tm_hide" alt="<?php the_title_attribute(); ?>" src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'img200300', true); echo $image_url[0]; ?>">
								<?php } else { ?>
									<img alt="<?php the_title_attribute(); ?>" src="<?php echo get_template_directory_uri(); ?>/images/nophoto.png" />
								<?php } ?>
							</a>
						</div>
						<!--</thumbnail>-->
						
						<!--<date>-->
						<div class="bw_date">
							<?php the_time('M j, Y') ?>
						</div>
						<!--</date>-->
						
						<!--<title>-->
						<div class="bw_title">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<h1 class="h1title"><?php echo get_the_title(); ?></h1>
							</a>
						</div>
						<!--</title>-->

					</div>
					<!--<bw_index_row>-->
			</div>
		</div>
		<!--</blog_list>-->

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<!--</the_loop>-->

	<!--<pagination>-->
	<div class="bw_pagination">
		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts <i class="fa fa-angle-double-right"></i>' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( '<i class="fa fa-angle-double-left"></i> Newer posts' ); ?></div>
	</div>
	<!--</pagination>-->

</div>
<!--</bw_index>-->

<?php get_footer(); ?>