<?php 

function smart_ifw_site_scripts() {
	$smart_ifw = get_option('_smart_ifw_options');
	wp_enqueue_style('smart-ifw-site', SMART_IFW_URL . 'assets/css/smart_ifw_site.css', true, '1.0.3');
	if($smart_ifw['switch_fa'] == 'on'){
		if($smart_ifw['switch_cdn'] == 'on') {
		wp_enqueue_style('smart-ifw-fa', '//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false, '4.3.0');
		} else {
		wp_enqueue_style('smart-ifw-fa', SMART_IFW_URL . 'assets/css/font-awesome.min.css', false, '4.3.0');
		}
	}
}

function smart_ifw_admin_scripts() {

	global $pagenow;
	$smart_ifw = get_option('_smart_ifw_options');
	// Only run in post/page creation and edit screens
	if ( in_array( $pagenow, array( 'post.php', 'page.php', 'post-new.php', 'post-edit.php', 'admin.php') ) ) { 
	wp_enqueue_script('jquery-chosen', SMART_IFW_URL . 'assets/js/vendor/chosen.jquery.min.js', true, '1.0.3');
	wp_enqueue_style('smart-ifw-admin', SMART_IFW_URL . 'assets/css/smart_ifw_admin.css', true, '1.0.3');
	if($smart_ifw['switch_cdn'] == 'on'){
	wp_enqueue_style('smart-ifw-fa', '//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false, '4.3.0');
	} else {
	wp_enqueue_style('smart-ifw-fa', SMART_IFW_URL . 'assets/css/font-awesome.min.css', false, '4.3.0');
	}
	wp_enqueue_style('jquery-chosen',  SMART_IFW_URL . 'assets/css/chosen.min.css', true, '1.0.3');
	}

}