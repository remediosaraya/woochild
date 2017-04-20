<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p class="price displaynone"><?php echo $product->get_price_html(); ?> </p>
	<div class='productinfo-show-discounts box-price'>
					<div class='yellow'>
						<div class='leftC'>Cantidad</div>
						<div class='rigthC'> $ +Envio</div>
						<div class='rigthC'> Entrega</div>
						<div class='rigthC'> Precio</div>
						<div class='clear'></div>
					</div>
					<div class='white'>
						<div class='leftC'>1-5 unidades:</div>
						<div class='rigthC'>$ <?php the_field('precioE_de_1_a_5'); ?> c/u</div>
						<div class='rigthC'><?php the_field('entrega_1'); ?> dias</div>
						<div class='rigthC'>$ <?php the_field('precio_de_1_a_5'); ?> c/u</div>
						<div class='clear'></div>
					</div>
					<div class='yellow'>
						<div class='leftC'>6-10 unidades:</div>
						<div class='rigthC'>$ <?php the_field('precioE_de_6_a_11'); ?> c/u</div>
						<div class='rigthC'><?php the_field('entrega_5_a_10'); ?> dias</div>
						<div class='rigthC'>$ <?php the_field('precio_de_6_a_11'); ?> c/u</div>
						<div class='clear'></div>
					</div>
					<div class='white'>
						<div class='leftC'>11-25 unidades:</div>
						<div class='rigthC'>$ <?php the_field('precioE_de_11_a_25'); ?> c/u</div>
						<div class='rigthC'><?php the_field('entrega_11_a_25'); ?> dias</div>
						<div class='rigthC'>$ <?php the_field('precio_de_11_a'); ?> c/u</div>
						<div class='clear'></div>
					</div>
					<div class='yellow'>
						<div class='leftC'>26 a 50 unidades:</div>
						<div class='rigthC'>$ <?php the_field('precioE_de_26_a_50'); ?> c/u</div>
						<div class='rigthC'><?php the_field('entrega_26_a_50'); ?> dias</div>
						<div class='rigthC'>$ <?php the_field('precio_de_26_a_50'); ?> c/u</div>
						<div class='clear'></div>
					</div>
					<div class='white'>
						<div class='leftC'>+50 unidades:</div>
						<div class='rigthC'>$ <?php the_field('precioE_51'); ?> c/u</div>
						<div class='rigthC'><?php the_field('entrega_51'); ?> dias</div>
						<div class='rigthC'>$ <?php the_field('precio_51'); ?> c/u</div>
						<div class='clear'></div>
					</div>
					

	<meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
	<link itemprop="availability" href="https://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>
</div>

