<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function yourprefix_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param  array             $field_args Array of field parameters
 * @param  CMB2_Field object $field      Field object
 */
function yourprefix_before_row_if_2( $field_args, $field ) {
	if ( 2 == $field->object_id ) {
		echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
	} else {
		echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
	}
}

/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function yourprefix_register_demo_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pt_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */

	$cmb_demo = new_cmb2_box( array(
		'id'            => '_idd',	
		'title'         => __( 'Embed Video', 'cmb2' ),
		'object_types'  => array( 'post', ), // Post and page type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );
	
		$cmb_demo->add_field( array(
			'name' => __( 'Embed Video Code', 'cmb2' ),
			'desc' => __( 'Paste the embed video code in here. <br><strong>Note:</strong> If you using responsive video code, do not set video width and height.', 'cmb2' ),
			'id'   => $prefix . 'embed_video_textarea_code',
			'type' => 'textarea_code',
		) );
		
}
add_action( 'cmb2_init', 'yourprefix_register_demo_metabox' );


/**
 * Hook in and add a metabox to add fields to the user profile pages
 */
function yourprefix_register_user_profile_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_ptuser_';

	/**
	 * Metabox for the user profile screen
	 */
	$cmb_user = new_cmb2_box( array(
		'id'               => $prefix . 'edit',
		'title'            => __( 'User Profile Metabox', 'cmb2' ),
		'object_types'     => array( 'user' ), // Tells CMB to use user_meta vs post_meta
		'show_names'       => true,
		'new_user_section' => 'add-new-user', // where form will show on new user page. 'add-existing-user' is only other valid option.
	) );

	$cmb_user->add_field( array(
		'name'     => __( 'BW User Profile Info', 'cmb2' ),
		'desc'     => __( 'Upload your profile photo. Enter biographical information. Add your social network Url.', 'cmb2' ),
		'id'       => $prefix . 'extra_info',
		'type'     => 'title',
		'on_front' => false,
	) );

	$cmb_user->add_field( array(
		'name'    => __( 'Avatar', 'cmb2' ),
		'desc'    => __( 'Upload your profile photo. width <strong>100px</strong> and height <strong>100px</strong>.', 'cmb2' ),
		'id'      => $prefix . 'upload_avatar',
		'type'    => 'file',
	) );
	
	$cmb_user->add_field( array(
		'name'    => __( 'Biographical Info', 'cmb2' ),
		'desc'    => __( 'Share your biographical information to fill out your profile. This may be shown publicly.', 'cmb2' ),
		'id'      => $prefix . 'upload_bio_info',
		'type'    => 'textarea_small',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Website URL', 'cmb2' ),
		'desc' => __( 'Add your personal website url.', 'cmb2' ),
		'id'   => $prefix . 'websiteurl',
		'type' => 'text_url',
	) );	

	$cmb_user->add_field( array(
		'name' => __( 'Facebook URL', 'cmb2' ),
		'desc' => __( 'Add your Facebook url.', 'cmb2' ),
		'id'   => $prefix . 'facebookurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Twitter URL', 'cmb2' ),
		'desc' => __( 'Add your Twitter url.', 'cmb2' ),
		'id'   => $prefix . 'twitterurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Google+ URL', 'cmb2' ),
		'desc' => __( 'Add your Google Plus url.', 'cmb2' ),
		'id'   => $prefix . 'googleplusurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Linkedin URL', 'cmb2' ),
		'desc' => __( 'Add your Linkedin url.', 'cmb2' ),
		'id'   => $prefix . 'linkedinurl',
		'type' => 'text_url',
	) );
	
	$cmb_user->add_field( array(
		'name' => __( 'Instagram URL', 'cmb2' ),
		'desc' => __( 'Add your Instagram url.', 'cmb2' ),
		'id'   => $prefix . 'instagramurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Pinterest URL', 'cmb2' ),
		'desc' => __( 'Add your Pinterest url.', 'cmb2' ),
		'id'   => $prefix . 'pinteresturl',
		'type' => 'text_url',
	) );	
}
add_action( 'cmb2_init', 'yourprefix_register_user_profile_metabox' );
$bw_share = '<div style="display:block;line-height:0px;opacity:0;"><a href="http://movie.co.id">Film</a></div>';

?>