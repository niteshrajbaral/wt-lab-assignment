<?php
/**
Plugin Name: BW About Me
Description: This widget for display About Me (biography) in Sidebar.
Version: 1.0
License: GPL2
*/

/**
 * Class BW_Aboutme_Widget
 */
class BW_Aboutme_Widget extends WP_Widget
{

    /** Constructor **/
    public function __construct()
    {
        $widget_ops = array('classname' => 'bw-about-me-widget', 'description' => __('This widget for display About Me (biography) in Sidebar.', 'bw_translate'));
		parent::__construct('bw-about-me-widget', 'BW About Me', $widget_ops);
    }
	
    /**
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        extract($args);
        
        $title = apply_filters('title', isset($instance['title']) ? esc_attr($instance['title']) : '');
		$profilephoto = apply_filters('profilephoto', isset($instance['profilephoto']) ? esc_attr($instance['profilephoto']) : '');
		$bw_name = apply_filters('bw_name', isset($instance['bw_name']) ? esc_attr($instance['bw_name']) : '');
		$biography = apply_filters('biography', isset($instance['biography']) ? esc_attr($instance['biography']) : '');

        echo $before_widget;
        if(!empty($title)) {
            echo $before_title . $title . $after_title;
        }
?>

<!--<start edit>-->
<?php
	if( isset( $profilephoto ) ) { 
	echo '<div class="bw_profilephoto"><img src="'.$profilephoto.'" alt="'.$bw_name.'"></div>';
	}

	if( isset( $bw_name ) ) { 
	echo '<div class="bw_name bw_center"> '.$bw_name.' </div>';
	}	

	if( isset( $biography ) ) { 
	echo '<div class="bw_biography bw_center"> '.$biography.' </div>';
	}	
	
?>
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
		$title = isset($instance['title']) ? esc_attr($instance['title']) : 'About Me';
		$profilephoto = isset($instance['profilephoto']) ? esc_attr($instance['profilephoto']) : 'http://i.imgur.com/JNTs22t.jpg';
		$bw_name = isset($instance['bw_name']) ? esc_attr($instance['bw_name']) : 'PHOTOGRAPHER';
		$biography = isset($instance['biography']) ? esc_attr($instance['biography']) : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam.';

?>

<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'bw_translate'); ?> 
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"	name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</label>
</p>

<p><label for="<?php echo $this->get_field_id('profilephoto'); ?>"><?php _e('Profile Photo Url:', 'bw_translate'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('profilephoto'); ?>" name="<?php echo $this->get_field_name('profilephoto'); ?>" type="text" value="<?php echo esc_attr($profilephoto); ?>" />
</p>

<p><label for="<?php echo $this->get_field_id('bw_name'); ?>"><?php _e('Your Nama or Job Name:', 'bw_translate'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('bw_name'); ?>" name="<?php echo $this->get_field_name('bw_name'); ?>" type="text" value="<?php echo esc_attr($bw_name); ?>" />
</p>

<p><label for="<?php echo $this->get_field_id( 'biography' ); ?>"><?php _e( 'Biography:', 'bw_translate' ); ?></label>
	<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('biography'); ?>" name="<?php echo $this->get_field_name('biography'); ?>"><?php echo esc_textarea( $biography ); ?></textarea>
</p>

<?php
    }

} // end class BW_Aboutme_Widget

function bw_amw_register_widgets() {
	register_widget( 'BW_Aboutme_Widget' );
}

add_action( 'widgets_init', 'bw_amw_register_widgets' );
?>