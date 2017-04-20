<?php
/* Custom functions code goes here. */








// Hook in
add_filter( 'woocommerce_billing_fields' , 'costume_override_billing_fields' );

// Our hooked in function - $fields is passed via the filter!
function costume_override_billing_fields( $fields ) {

// Change billing_first_name a.k.a Nama Depan to Nama Lengkap
     $fields['billing_first_name']['placeholder'] = '';
     $fields['billing_first_name']['label'] = 'Nombre y apellidos';
	 $fields['billing_first_name']['class'] = array('form-row-last');
	  $fields['billing_city']['class'] = array('form-row-first');
	  $fields['billing_state']['class'] = array('form-row-last');
	  
	
	 
	 
	 
	 
	 

// Remove Nama Belakang, Company Name, VAT/SSN
	unset($fields['billing_last_name']);
	unset($fields['billing_vat']);
    unset($fields['billing_postcode']);
	
	return $fields;
	
}














// Add custom classes to the body
add_filter( 'body_class', 'my_custom_body_classes' );
function my_custom_body_classes( $classes ) {
	if ( is_search() ){
		$classes[] = 'woocommerce'; // show products properly on the search page
	}
	return $classes;
}



function add_this_script_footer(){ ?>

<script>



$( document ).ready(function() {
	
	
	
	
	
	$(".woocommerce-thankyou-order-received").text("Muchas gracias por realizar su pedido, nuestro equipo se estará comunicando a la mayor brevedad.");
	
	$( ".woocommerce p:contains('Se le contactará pronto con las instrucciones de pago.')" ).css( "display", "none" );
	
	$( ".woocommerce-message:contains('se ha añadido a tu carrito.')" ).text("El producto se ha añadido al carrito");
	
	
	
	
	$(".woocommerce .cart-collaterals .wc-proceed-to-checkout a").text("Realizar pedido");
	
    $(".single-product a.button.product_type_simple.add_to_cart_button").text("Adicionar");
	
	
	
	$(".single-product a.button.product_type_simple.add_to_cart_button").click(function(e) {
		
	

    if( $("input.input-text.qty.text").val() == 0)
	{
		alert("Debe de agregar al menos un elemento");
return false;
}	
		
   
});
	
	
});

</script>

<?php } 

add_action('wp_footer', 'add_this_script_footer'); 