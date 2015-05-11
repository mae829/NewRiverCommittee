<?php
	/* 
		Description: PHP functions
		Author: Miguel Estrada
		Author URI: http://bleucellar.com/
	*/
	
	############# LOG IN CODE #############
	function custom_login_logo() {
		echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo.png) 50% 50% no-repeat !important; display:block; width:380px; height:115px; margin-left:-35px; }</style>';
	}
	add_action('login_head', 'custom_login_logo');
	

	//remove unecessary things from header wp_head function
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'start_post_rel_link', 10, 0 );
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	remove_action('wp_head', 'rel_canonical');

	// remove upgrade notification
	function no_update_notification() {
		remove_action('admin_notices', 'update_nag', 3);
	}
	if (!current_user_can('edit_users')) add_action('admin_notices', 'no_update_notification', 1);


	//add Read More and link to the excerpt
	function new_excerpt_more($more) {
		   global $post;
		return '<a href="'. get_permalink($post->ID) . '">' . '...Read More' . '</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');


	//register dynamic sidebar
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		));
	}

	//register custom posts
	function register_custom_posts() {
		$args = array(
			'label' => __('Newsletters'),
			'singular_label' => __('Newsletter'),
			'public' => true,
			'capability_type' => 'post',
			'rewrite' => array('slug' => 'newsletters'),
			'show_ui' => true,
			'menu_position' => 5,
			'supports' => array(
				'title',
				'editor',
				//'trackbacks',
				//'custom-fields',
				//'comments',
				'revisions',
				//'thumbnail',
				'author'
				//'page-attributes'
			)
		);
		
		register_post_type('newsletter', $args);
		
		$args = array(
			'label' => __('Resources'),
			'singular_label' => __('Resource'),
			'public' => true,
			'capability_type' => 'post',
			'rewrite' => array('slug' => 'resources'),
			'show_ui' => true,
			'menu_position' => 5,
			'supports' => array(
				'title',
				'editor',
				//'trackbacks',
				//'custom-fields',
				//'comments',
				'revisions',
				//'thumbnail',
				'author'
				//'page-attributes'
			)
		);
		
		register_post_type('resource', $args);
	}
	add_action('init', 'register_custom_posts');
	
	
	function change_post_menu_label() {
		global $menu;
		global $submenu;
		$menu[5][0] = 'News/Artic.';
		$submenu['edit.php'][5][0] = 'News/Artic.';
		$submenu['edit.php'][10][0] = 'Add News/Artic.';
		$submenu['edit.php'][16][0] = 'News/Artic. Tags';
		echo '';
	}
	function change_post_object_label() {
		global $wp_post_types;
		$labels = &$wp_post_types['post']->labels;
		$labels->name = 'News/Artic.';
		$labels->singular_name = 'News/Artic.';
		$labels->add_new = 'Add News/Artic.';
		$labels->add_new_item = 'Add News/Artic.';
		$labels->edit_item = 'Edit News/Artic.';
		$labels->new_item = 'News/Artic.';
		$labels->view_item = 'View News/Artic.';
		$labels->search_items = 'Search News/Artic.';
		$labels->not_found = 'No News/Artic. found';
		$labels->not_found_in_trash = 'No News/Artic. found in Trash';
	}
	add_action( 'init', 'change_post_object_label' );
	add_action( 'admin_menu', 'change_post_menu_label' );

	
	
	

	// remove unnecessary menus
	function remove_admin_menus () {
		global $menu;
		// all users
		$restrict = explode(',', 'Comments');
		
		// non-administrator users
		$restrict_user = explode(',', 'Profile,Appearance,Plugins,Users,Tools,Settings');
		// WP localization
		$f = create_function('$v,$i', 'return __($v);');
		array_walk($restrict, $f);
		if (!current_user_can('activate_plugins')) {
			array_walk($restrict_user, $f);
			$restrict = array_merge($restrict, $restrict_user);
		}
		// remove menus
		end($menu);
		while (prev($menu)) {
			$k = key($menu);
			$v = explode(' ', $menu[$k][0]);
			if(in_array(is_null($v[0]) ? '' : $v[0] , $restrict)) unset($menu[$k]);
		}
	}
	add_action('admin_menu', 'remove_admin_menus');

	
	
	######### MOBILE CODE FUNCTION #########
	function myDetect(){
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$info['mobile'] = false;
		$info['browser'] = "OTHER";
		$info['os'] = "OTHER";
		$info['apple'] = false;
		$browsers = array("Opera","Mozilla","Netscape","Firefox","Safari", "Flock", "Chrome","MSIE");
		$os = array("Windows","Mac","Linux","iPhone");
		$devices = array("iPhone","iPad","iPod","Android", "BlackBerry");
		$mobile_regexp1 = '/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i';
		$mobile_regexp2 = '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i';

		//from http://detectmobilebrowser.com/  (cleaned up a little by using $mobile variables above)
		if(preg_match($mobile_regexp1,$user_agent)||preg_match($mobile_regexp2,substr($user_agent,0,4))){
			$info['mobile'] = true;
		}
		
		foreach($browsers as $browser){
			if (preg_match("#($browser)[/ ]?([0-9.]*)#", $user_agent, $match)){
				$info['browser'] = $match[1];
				$info['version'] = $match[2];
				if(preg_match("#(Version)[/ ]?([0-9.]*)#", $user_agent, $ver)){
					$info['version'] = $ver[2];
				};
			};
		}
		foreach ($os as $val){
			if (preg_match("/($val)/",$user_agent)){ 
				$info['os'] = $val;
				if($info['os'] == 'iPhone'){
					preg_match("#OS ([0-9._]*)#",$user_agent,$iphone);
					$info['os'] = "$val $iphone[0]";
				};
			};
		}
		foreach ($devices as $device){
			if(strstr($user_agent,$device)){
				$info['device'] = $device;
			};
			if($info['device'] == 'iPhone' || $info['device'] == 'iPod' || $info['device'] == 'iPad'){
				$info['apple'] = true;
			};
		}
		return $info;
	}

	$detect = myDetect();
	$browser = $detect['browser'];
	$ver = $detect['version'];
	$os = $detect['os'];
	$device = $detect['device'];
	$apple = $detect['apple'];
	$mobile = $detect['mobile'];


	######### BODY ID FUNCTION #########
	function body_control() {
		global $post; 
		$postclass = $post->post_name;
	 
		if (is_front_page()) {
			echo ' id="home"';
		} elseif (is_single()) {
			echo ' id="'.$postclass.'" class="single"';
		} elseif(is_home()) {
			echo ' id="blog"';
		} else{
			echo ' id="'.$postclass.'"';
		}
	}


	function my_paginate_links() {
		global $wp_rewrite, $wp_query;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		 
		$pagination = array(
			'base' => @add_query_arg('paged','%#%'),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $current,
			'prev_text' => __('« Previous'),
			'next_text' => __('Next »'),
			'end_size' => 3,
			'mid_size' => 3,
			//'show_all' => true,
			'type' => 'list'
		);
		 
		if ( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
		 
		if ( !empty( $wp_query->query_vars['s'] ) )
			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
		 
		echo paginate_links( $pagination );
	}
?>