<?php
// Home Page
$context = Timber::get_context();

$templates = array( pll_current_language() . '-' . '404.twig' );
Timber::render( $templates, $context );