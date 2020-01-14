<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<form action="<?php bloginfo('url'); ?>/" method="get">
  <input type="text" name="s" id="s" placeholder="Buscar" value="<?php the_search_query(); ?>" />
  <input type="text" name="post_type" id="post_type" value="product" class="hidden" />
  <input type="submit" id="searchbutton" value="Buscar" />
</form>

<?php 
  wp_nav_menu([
    'menu' => 'categorias',
    'container' => 'nav',
    'container_class' => 'menu-categorias',
  ]);
?>

