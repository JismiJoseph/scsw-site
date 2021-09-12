 <?php
 
 //add widgets
 function custom_Widgests() {

		register_sidebar(
			[
				'name'          => 'Sidebar',
				'id'            => 'sidebar-1',
				'before_widget' => '<div class="sidebarWidgetItem">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>'
			]
		);

		}
		
		 add_action( 'widgets_init',  'custom_Widgests' );
?>

 <?php
 
 //add widgets
 function custom_Widgests_shop() {

		register_sidebar(
			[
				'name'          => 'Sidebar2',
				'id'            => 'sidebar-2',
				'before_widget' => '<div class="sidebarWidgetItem">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>'
			]
		);

		}
		
		 add_action( 'widgets_init',  'custom_Widgests_shop' );
?>
