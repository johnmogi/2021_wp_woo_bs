<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>


	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
</a>
  <div class="text-center">gad</div>
      <div class="d-flex">
	  <?php global $woocommerce; ?>
<a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>" class="cart">
	<img src="<?php bloginfo('template_directory') ?>/images/cart.png" alt="Cart Icon">
	<span>Cart (<span id="cart-count"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>)</span>
</a>    
	       </div>
    </div>
  </div>
</nav>

