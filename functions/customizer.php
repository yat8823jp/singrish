<?php
//====================================================================================
//Custmizer
//====================================================================================

// sr_customizer_extension load
require_once locate_template( '/functions/customizer/footer.php' );
require_once locate_template( '/functions/customizer/gnavi.php' );

function sr_customizer_color() {
	?>
		<style type="text/css">
		/* footer */
		.l-footer {
			color: <?php echo get_theme_mod( 'footer_text_color', '#fffac6' ); ?>;
			background-color: <?php echo get_theme_mod( 'footer_background_color', '#7d0000' ); ?>;
		}
		.l-footer a:link {
			color:  <?php echo get_theme_mod( 'footer_link_color', '#fffac6' ); ?>;
		}
		.l-footer a:visited {
			color:  <?php echo get_theme_mod( 'footer_visited_color', '#fffac6' ); ?>;
		}
		.l-footer a:hover {
			color:  <?php echo get_theme_mod( 'footer_hover_color', '#fff' ); ?>;
		}
		.l-footer a:active {
			color:  <?php echo get_theme_mod( 'footer_active_color', '#fff' ); ?>;
		}
		.sub-menu {
			background-color: <?php echo get_theme_mod( 'subitem_bg_color', '#590000' ); ?>;
		}
		.p-gnavi a:link {
			color:  <?php echo get_theme_mod( 'footer_link_color', '#fffac6' ); ?>;
		}
		.p-gnavi a:visited {
			color:  <?php echo get_theme_mod( 'footer_visited_color', '#fffac6' ); ?>;
		}
		.p-gnavi a:hover {
			color:  <?php echo get_theme_mod( 'footer_hover_color', '#fff' ); ?>;
		}
		.p-gnavi a:active {
			color:  <?php echo get_theme_mod( 'footer_active_color', '#fff' ); ?>;
		}
		</style>
	<?php
}
add_action( 'wp_head', 'sr_customizer_color' );
