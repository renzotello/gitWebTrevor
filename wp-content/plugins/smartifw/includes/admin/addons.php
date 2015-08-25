<?php

function smart_ifw_addons_page()
	{
	add_thickbox();
?>
			<div id="smart-ifw-pro-addons-page" class="wrap smart-ifw">
				<div id="icon-options-general" class="icon32"></div>
			<h2 class="title">SmartIcons Add-ons</h2>
				<div id="">
			<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox smart-ifw-box">
					<h3 class="title"><span>Official add-ons for pro version</span></h3>
						
						<div class="inside">
													
				<table class="form-table smart-ifw-addons-table">
						<tbody>
						<td>
						<div class="left feature">			
			
			<?php
	$menuaddonimg = '<img src="' . SMART_IFW_URL . 'images/addons/sifwmenu-300x150.jpg" alt="' . __('Menu Icons', 'smart_ifw') . '"/>';
	$menuaddonoutput = '<a href="#TB_inline?width=640&inlineId=sifwmenu-addon" class="thickbox" title="' . __('Menu Icons', 'smart_ifw') . '">' . $menuaddonimg . '<h3>Menu Icons</h3><p>Add icons to menu items</p></a>';
	echo $menuaddonoutput;
?>
		</div>
	
	 </div>
						</td>
						<td>
						<div class="feature">
						  <?php
	$csimg = '<img src="' . SMART_IFW_URL . 'images/addons/cs.jpg" alt="' . __('Coming Soon', 'smart_ifw') . '"/>';
	$widgetoutput = '<a href="#TB_inline?width=640&inlineId=sifwwidget-addon" class="thickbox" title="' . __('Widget Icons', 'smart_ifw') . '">' . $csimg . '<h3>Widget Icons</h3><p>Add icons to widgets</p></a>';
	echo $widgetoutput;
?>
						</div>
						</td>
						
						</tr>

					</tbody>
			  </table>
	    </form>				</div> <!-- .inside -->
		</div> <!-- postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
				</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	 	</div> <!-- #poststuff -->
	
</div> 
<!-- .wrap -->

<!-- Addons -->

<!-- Menu Addon -->
<div id="sifwmenu-addon" style="display: none;">
			<div class="smart-ifw addon-wrap" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
				<?php
	if (is_admin()): ?>
				
					<table class="form-table">
						<tbody>
						<tr>
						<td>
									 <div class="left"><strong>Add Icons To Menu Items</strong></div>
						</td>
						</tr>
												<tr>
						<td>

																		<div class="right" style="padding: 5px 5px;">
																		
																		<a id="smart-ifw-buy-menu-addon" class="smart-ifw button-primary" href="http://www.smartpixels.net/products/smarticons-wordpress-pro-menu-add" title="Buy Menu Addon">Buy Addon</a>							 
																		 </div>
																		 <div class="description">
																		 <div class="thumb-holder">																	 
																		 <?php
		echo $menuaddonimg ?>
																		 </div>	Menu Add-on for SmartIcons for WordPress Pro Plugin gives you the ability to add icons to default WordPress menu items with animation and styling. It is fully integrated with WordPress default menu system, if you have added menu items then you can add icons to them.	
																		 </div>
																	
 

						</td>
						</tr>
						</tbody>
				</table>
					</div>
				<?php
	endif;
?>					
</div>
			
<!-- Widget Addon -->		
<div id="sifwwidget-addon" style="display: none;">
<div class="smart-ifw addon-wrap" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
				<?php
	if (is_admin()): ?>
				<table class="form-table">
				<tbody>
				<tr>
				<td>
				<div class="left"><strong>Add Icons To Widget Items</strong></div>
				</td>
				</tr>
				<tr>
				<td>
				<div class="left" style="padding: 5px 5px;">
																	     											 
				</div>
				<div class="description">
				<div class="thumb-holder">
				<?php
		echo $csimg ?>
				</div>	 
				Widget Add-on for SmartIcons for WordPress Pro Plugin gives you the ability to add icons to default WordPress Widget items with animation and styling.</div>
				</td>
				</tr>
				</tbody>
				</table>
					</div>
				<?php
	endif;
?>					

			</div>

<?php
	}

function smart_ifw_addon_activate_button()
	{
	if (menu_addon_exists() && is_menu_addon_active())
		{
		$activated_button = '<a id="smart-ifw_active_menu_addon" class="button-secondary" onclick="tb_remove();" style="color:green;" href="' . admin_url('nav-menus.php') . '" title="Smart Icons For Pro Menu Addon has already been installed and activated">Activated</a>';
		return $activated_button;
		}

	if (!is_menu_addon_active())
		{
		$plugin_path = 'smart-icons-pro-menu-addon/smart_icons_pro_menu_addon.php';
		$activation_button = '<a id="smart-ifw_activate_menu_addon" class="button-secondary" href="' . wp_nonce_url(admin_url('plugins.php?action=activate&plugin=' . $plugin_path) , 'activate-plugin_' . $plugin_path) . '" title ="Activate the plugin">Activate</a>';
		return $activation_button;
		}
	
	}

function is_menu_addon_active()
	{
	if (is_plugin_active('smart-icons-pro-menu-addon/smart_icons_pro_menu_addon.php'))
		{
		return true;
		}
	  else
		{
		return false;
		}
	}

function menu_addon_exists()
	{
		if (file_exists(WP_PLUGIN_DIR . '/smart-icons-pro-menu-addon/smart_icons_pro_menu_addon.php'))
		{
		return true;
		}
	  else
		{
		return false;
		}
		
	}