<?php
/**
 * Displays header branding
 */
?>

<div class="navigation__branding d-flex align-items-center">
	<?php if ( has_custom_logo() ) : ?>
		<div class="navigation__logo">
			<?php the_custom_logo(); ?>
		</div>
	<?php else: ?>
		<div class="navigation__title">
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</div>
	<?php endif; ?>
</div>
