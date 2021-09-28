<?php
// Blog Home
$context = Timber::get_context();

$context['posts'] = new Timber\PostQuery();
// $context['sumome'] = true;
$context['categories'] = Timber::get_terms('category');


$templates = array( pll_current_language() . '-' . 'blog.twig' );
Timber::render( $templates, $context );