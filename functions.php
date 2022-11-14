<?php

if ( ! function_exists( 'futurenorthants_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
function futurenorthants_setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'editor-style.css' );
}
endif; // futurenorthants_setup
add_action( 'after_setup_theme', 'futurenorthants_setup' );
