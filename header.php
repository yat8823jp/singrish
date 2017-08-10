<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" article.wrap
 *
 * @package WordPress
 * @subpackage singrish
 * @since 2017
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<article class="wrap">
