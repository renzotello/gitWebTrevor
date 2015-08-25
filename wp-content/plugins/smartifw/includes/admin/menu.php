<?php
function smart_ifw_menu()
{
    add_menu_page( __("Smart Icons", "smart_ifw"), __("SmartIcons", "smart_ifw"), 'manage_options', 'smart-icons-for-wordpress', 'smart_ifw_settings_page', SMART_IFW_URL.'/images/menu-icon.png');
	add_submenu_page('smart-icons-for-wordpress', __("Add-ons", "smart_ifw") , __("Add-ons", "smart_ifw") , 'manage_options', 'smart-ifw-pro-addons-page', 'smart_ifw_addons_page');
    
}


function smart_ifw_settings_page()
{
    global $smart_ifw;
    $smart_ifw_get = get_option('_smart_ifw_options');
    if (!empty($smart_ifw_get)) {
        
        $smart_ifw = $smart_ifw_get;
        update_option('_smart_ifw_options', $smart_ifw);
    } else {
        $smart_ifw = array(
            'switch_fa' => 'on',
            'switch_cdn' => 'on',
			'icon_code' => 'smarticon'
        );
        add_option('_smart_ifw_options', $smart_ifw);
    }
	if ( current_user_can('manage_options') ){
?>
					
			<div id="smart-syntax-settings-page" class="wrap smart-ifw">
				<div id="icon-admin" class="icon32"></div>
			<h2 class="title">SmartIcon For WordPress Settings</h2>
				<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox smart-ifw-box">
	    <?php
    // $_POST needs to be sanitized by version 1.0
    if (isset($_POST['submit']) && check_admin_referer('smart_ifw_action', 'smart_ifw_ref')) {
        $smart_ifw_wp_message = '';
        $smart_ifw            = array(
            'switch_fa' => '' . $_POST['switch_fa'] . '',
            'switch_cdn' => '' . $_POST['switch_cdn'] . '',
			'icon_code' => '' . $_POST['icon_code'] . ''
        );
        update_option('_smart_ifw_options', $smart_ifw);
        echo '<div id="message" class="updated below-h2"><p>Smart icons for wordpress settings is updated. ', $smart_ifw_wp_message, '</p></div>';
    }
?>
			<form method="post" action="<?php
    echo esc_attr($_SERVER["REQUEST_URI"]);
?>">
		  <?php
    wp_nonce_field('smart_ifw_action', 'smart_ifw_ref');
    $checked = '';
    if ($smart_ifw['switch_fa'] == 'on') {
        $fa = 'checked="checked"';
    }
    if ($smart_ifw['switch_cdn'] == 'on') {
        $cdn = 'checked="checked"';
    }
	
?>
						<div class="inside">
													
				<table class="form-table smart-ifw-table">
						<tbody>
						
<tr><td><div class="left"><h3 class="title">SmartIcon Shortcode</h3></div></td></tr>
						<tr>
						<td>
						<div class="left"><strong> <label class="text-label" for="icon_code"> Enter your [shortcode]  </label> </strong></div>
						</td>
						<td>
									 <div class="pad-left left">
									 <input type="text" name="icon_code" class="textbox" id="icon_code" value="<?php
        echo $smart_ifw['icon_code'];
?>">
									 </div>
						</td>
						
						</tr>
						<tr><td><h3 class="title">On/Off Icons</h3></td></tr>
						<tr>
						<td>
									 <div class="left"><strong>Font Awesome 4</strong></div>
						</td>
						<td>
									 <div class="onoffswitch pad-left left">
									 <input type="checkbox" name="switch_fa" class="onoffswitch-checkbox" id="switch_fa" <?php    if (isset($fa)) {  echo $fa; }?>>
									 <label class="onoffswitch-label" for="switch_fa">
									 <span class="onoffswitch-inner"></span>
									 <span class="onoffswitch-switch"></span>
									 </label>
									 </div>
						</td>
						
						</tr>
						<tr>
						<td>
									 <div class="left"><strong>Zurb Icons</strong></div>
						</td>
						<td>
									 <div class="onoffswitch proswitch pad-left left">
									 <input type="checkbox" name="switch_pro" class="onoffswitch-checkbox" id="switch_pro">
									 <label class="onoffswitch-label" for="switch_pro">
									 <span class="onoffswitch-pro"></span>
									 </label>
									 </div>
						</td>
						</tr>
												</tr>
								<tr><td><h3 class="title">Import Icons</h3></td></tr>
						<tr>
						<tr>
						<td>
									 <div class="left"><strong>Import Flaticon</strong></div>
						</td>
						<td>
									 <div class="onoffswitch proswitch pad-left left">
									 <input type="checkbox" name="switch_pro" class="onoffswitch-checkbox" id="switch_pro">
									 <label class="onoffswitch-label" for="switch_pro">
									 <span class="onoffswitch-pro"></span>
									 </label>
									 </div>
						</td>
						</tr>
						<tr>
						<td>
									 <div class="left"><strong>Import Icomoon</strong></div>
						</td>
						<td>
									 <div class="onoffswitch proswitch pad-left left">
									 <input type="checkbox" name="switch_pro" class="onoffswitch-checkbox" id="switch_pro">
									 <label class="onoffswitch-label" for="switch_pro">
									 <span class="onoffswitch-pro"></span>
									 </label>
									 </div>
						</td>
						</tr>
						</tr>
						<tr><td><h3 class="title">Mode of delivery</h3></td></tr>
						<tr>
						<td>
									 <div class="left"><strong>CDN</strong></div>
						</td>
						<td>
									 <div class="onoffswitch pad-left left">
									 <input type="checkbox" name="switch_cdn" class="onoffswitch-checkbox" id="switch_cdn" <?php    if (isset($cdn)) {  echo $cdn; }?>>
									 <label class="onoffswitch-label" for="switch_cdn">
									 <span class="onoffswitch-inner"></span>
									 <span class="onoffswitch-switch"></span>
									 </label>
									 </div>
						</td>
						
						</tr>
						<tr>
							<td>
								<p class="submit"><input type="submit" name="submit" class="button-primary" value="Save Changes" /></p>
							</td>
						</tr>
					</tbody>
			  </table>
	    </form>				</div> <!-- .inside -->
		</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
				</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	 	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->
	<?php
	}
}