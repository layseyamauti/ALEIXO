<?php 

function aleixo_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'aleixo_add_woommerce_support');

function aleixo_css() {
    wp_register_style('aleixo-style', get_template_directory_uri() . '/style.css', [], '1.0.0', false);
    wp_enqueue_style('aleixo-style');
}
add_action('wp_enqueue_scripts', 'aleixo_css');

function aliexo_custom_images() {
    add_image_size('slide', 1000, 800, ['center', 'top']);
    update_option('medium_crop', 1);
}
add_action('after_setup_theme', 'aleixo_custom_images');


// functions.php
function handel_product_list($products) { ?>
	<ul class="produtos-lista">
		<?php foreach($products as $product) { ?>
			<li class="produto-item">
				<a href="<?= $product['link']; ?>">
					<div class="produto-info">
						<img src="<?= $product['img']; ?>" alt="<?= $product['name']; ?>"/>
						<h2><?= $product['name']; ?> - <span><?= $product['price']; ?></span></h2>
					</div>
					<div class="produto-item_overlay">
						<span>Ver Mais</span>
					</div>
				</a>
			</li>
		<?php } ?>
	</ul>
<?php
}




?>