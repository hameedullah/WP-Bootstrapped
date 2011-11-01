<?php

/**
 * Bootstrapped
 *
 * Main theme class, registers customization, admin ui and others.
 **/
class Bootstrapped {

	/**
	 * __construct 
	 * 
	 * @access protected
	 * @return void
	 */
	function __construct() {
		add_action( 'after_setup_theme', array( &$this, 'register_theme_customizations' ) );

		add_filter( 'nav_menu_css_class' , array( &$this, 'add_custom_class_to_wp_nav_menu' ) , 10 , 2);
	}

	/**
	 * register_theme_customizations 
	 * 
	 * @access public
	 * @return void
	 */
	public function register_theme_customizations() {
		register_nav_menus(
			array(
				'topbar-menu' => 'Top Bar Menu'
			)
		);
	}

	/**
	 * add_custom_class_to_wp_nav_menu 
	 *
	 * Filter to add custom class to wp menu
	 *
	 * Wordpress by default adds 'current-menu-item' css class to the selected menu item. 
	 * Twitter's Bootstrap uses 'active' to mark the currently selected item. This filter
	 * checks if the menu item has the 'current-menu-item' as its css class and then adds
	 * 'active' as the css class too.
	 * 
	 * @param mixed $classes 
	 * @param mixed $item 
	 * @access public
	 * @return void
	 */
	function add_custom_class_to_wp_nav_menu($classes, $item){
		if ( in_array( 'current-menu-item', $classes ) ) {
			$classes[] = 'active';
		}
		return $classes;
	}

}
?>
