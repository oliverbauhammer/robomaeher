<?php
/**
 * Displays the header
 */

$wrapper_classes  = 'header__wrapper';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';

?>

<header class="<?php echo esc_attr( $wrapper_classes ); ?>">

	<?php get_template_part( 'template-parts/header/service' ); ?>
	<?php get_template_part( 'template-parts/header/mobile' ); ?>
	<?php get_template_part( 'template-parts/header/marquee' ); ?>

	<div class="container">
		<div class="row">
			<div class="col-auto">
				<?php get_template_part( 'template-parts/header/branding' ); ?>
			</div>
			<div class="col d-none d-lg-flex justify-content-between navigation__wrapper">
				<?php get_template_part( 'template-parts/header/navigation' ); ?>
				<?php get_template_part( 'template-parts/components/search' ); ?>
			</div>
		</div>
	</div>

</header>
