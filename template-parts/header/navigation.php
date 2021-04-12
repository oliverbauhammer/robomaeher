<?php
/**
 * Displays the main navigation
 */
?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav class="navigation__primary" role="navigation">
		<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'menu_class'      => 'navigation__menu list-unstyled d-flex menu-item-wrapper',
					'container'	 	  => '',
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					'fallback_cb'     => false,
				)
			);
		?>
	</nav>
<?php endif; ?>
