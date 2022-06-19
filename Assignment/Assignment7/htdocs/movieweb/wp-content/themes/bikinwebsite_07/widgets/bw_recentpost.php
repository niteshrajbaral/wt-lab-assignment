<?php
/**
Plugin Name: BW Recent Post Widget
Description: This widget for display recent post in sidebar.
Version: 1.0
License: GPL2
*/

/**
 * Class BW_Recent_Post_Widget
 */
class BW_Recent_Post_Widget extends WP_Widget
{

    /** Constructor **/
    public function __construct()
    {
        $widget_ops = array('classname' => 'bw-recent-post-list-widget', 'description' => __('This widget for display recent post in sidebar.', 'bw_translate'));
		parent::__construct('bw-recent-post-list-widget', 'BW Recent Post Widget', $widget_ops);
    }
	
    /**
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        extract($args);
        
        $title = apply_filters('title', isset($instance['title']) ? esc_attr($instance['title']) : '');
		
		error_reporting(E_ERROR | E_PARSE);
		if( !$category = $instance["category"] ) $category='';
				
        $count = apply_filters('count', isset($instance['count']) && is_numeric($instance['count']) ? esc_attr($instance['count']) : '');

        echo $before_widget;
        if(!empty($title)) {
            echo $before_title . $title . $after_title;
        }
?>

<!--<start edit>-->
<div class="">

	<?php
	$the_query = new WP_Query(array(
		'category__in' => $category,
		'posts_per_page' => $count,
		'post__not_in' => get_option( 'sticky_posts' ), /* non sticky mode */
		// 'orderby'        => 'modified',		
		// 'post__in'       => get_option( 'sticky_posts' ), /* sticky mode */
	));

	while($the_query->have_posts()) : $the_query->the_post();
	?>
			<div class="row margin_bt15">
				<div class="col-xs-3">
					<?php if (has_post_thumbnail()) { ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img alt="<?php the_title_attribute(); ?>" src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); echo $image_url[0]; ?>">
						</a>
					<?php } else { ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img alt="<?php the_title_attribute(); ?>" src="<?php echo get_template_directory_uri(); ?>/images/thumbnail.png" />
						</a>
					<?php } ?>
				</div>
				
				<div class="col-xs-9">
					<div class="">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
							<h1 class="h1title_widget"><?php echo get_the_title(); ?></h1>
						</a>
					</div>
					
					<div class="bw_date_sticky">
						<?php the_time('F j, Y') ?>
						<?php _e('by', 'bw_translate'); ?>
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>			
					</div>
				</div>	
			</div>
		
	<?php
		endwhile;
		wp_reset_query();
		wp_reset_postdata();
	?>

</div>	
<!--</stop edit>-->

<?php
		echo $after_widget;
	}

    /**
     * @param array $new_instance
     * @param arrau $old_instance
     * @return mixed
     */
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    /**
     * @param array $instance
     */
    public function form($instance) 
	{
		$title = isset($instance['title']) ? esc_attr($instance['title']) : 'Recent Post';

		$defaults = array('category' => ''); 
		$instance = wp_parse_args( (array) $instance, $defaults, array( 'category' => '' ) );
		
		$count = isset($instance['count']) && is_numeric($instance['count']) ? esc_attr($instance['count']) : 5;
?>

<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'bw_translate'); ?> 
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"	name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</label>
</p>
	
<p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Select categories to include:', 'bw_translate');?> 
	<?php
		$categories = get_categories('hide_empty=0');
		echo "<br/>";
		foreach ($categories as $cat) 
		{
		$option='<input type="checkbox" id="'. $this->get_field_id( 'category' ) .'[]" name="'. $this->get_field_name( 'category' ) .'[]"';
		if (is_array($instance['category'])) 
			{
				foreach ($instance['category'] as $category) 
					{
						if($category==$cat->term_id) 
						{
							$option=$option.' checked="checked"';
						}
					}
			}
							
		$option .= ' value="'.$cat->term_id.'" />';
		$option .= '&nbsp;';
		$option .= $cat->cat_name;
		$option .= '<br />';
		echo $option;
		}            
	?>
	</label>
</p>

<p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Number of posts to show:', 'bw_translate'); ?> 
	<input id="<?php echo $this->get_field_id('count'); ?>"	name="<?php echo $this->get_field_name('count'); ?>" type="text" size="3" value="<?php echo $count; ?>" />
	</label>
</p>

<?php
    }

} // end class BW_Recent_Post_Widget

function bw_rcw_register_widgets() {
	register_widget( 'BW_Recent_Post_Widget' );
}

add_action( 'widgets_init', 'bw_rcw_register_widgets' );
?>