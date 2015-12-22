<?php
/**
 * Thème Nether News fonctions et définitions
 *
 * @link https://codex.wordpress.org/Theme_Development
 */

# Paramètre les valeurs par défaut du thème et déclare le support pour différentes fonctionnalités de WordPress
function nethernews_setup() {
    
    # Support de la balise <title>
    add_theme_support( 'title-tag' );
    
    # Support des thumbnails
    add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
    
    # Changement du Markup pour générer du HTML5 valide
    add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
    
    # Support des formats de postes
    add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );    
}

# Ajout de la fonction
add_action( 'after_setup_theme', 'nethernews_setup' );

# Retourne la catégorie actuelle
function c_the_category() {
    foreach((get_the_category()) as $category) {
        return $category->cat_name . ' ';
    }
}