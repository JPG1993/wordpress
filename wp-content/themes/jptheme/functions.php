<?php 
// fonction permettant d'inserer les images à l'aide de la fonction get_stylesheet_directory_uri(). dans le fichier single ou index.php. -->

    function montheme_supports()
    {
        add_theme_support('title-tag');
        // pour supporter les images
        add_theme_support( 'post-thumbnails');
        add_theme_support('menus');
        register_nav_menu('header', 'En tete du menu');
    }
    add_action('after_setup_theme', 'montheme_supports');

    register_sidebar([
        'id' => 'homepage',
        'name' => 'Menu Accueil',
        // 'before_widget' => '<div class="p-4 %2$s" id="%1$s">',
        // 'after_widget' => '</div>',
        // 'before_title' => '<h4 class="font-italic">',
        // 'after_title' => '</h4>'
    ]);
    // add_action('widgets_init', 'homepage'); 
    
    function montheme_register_post_types() {
        // Custom Post Types and Taxonomies declaration go here
        // CPT Portfolio
    //Les différents noms de notre CPT
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

    $args = array(
        'labels' => $labels,
        'public' => true, //accessible sur le site ?
        'show_in_rest' => true, //accessible par l'API? Gutenberg en a besoin pour fonctionner correctement
        'has_archive' => true, //comme les articles ou comme les pages ?
        'supports' => array( 'title', 'editor', 'thumbnail', 'autor', 'date', 'comments'),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
        );

    register_post_type( 'portfolio', $args ); //le nom de notre CPT
    }
    add_action( 'init', 'montheme_register_post_types' );

    function montheme_register_assets()
    {
        wp_register_style('boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css%22%22");
        wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js", ['popper', 'jquery'], false, true);
        // systeme qui permet de faire les petite pop up
        wp_register_script('popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js", [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', "https://code.jquery.com/ui/1.13.1/jquery-ui.min.js", [], false, true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
    }
    add_action('wp_enqueue_scripts', 'montheme_register_assets');

    // function custom_sidebar(){

    // }
    // add_action('widget_init', 'custom_sidebar');

    function add_styles() {
        //va chercher style.css
        wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    }
    add_action( 'wp_enqueue_scripts', 'add_styles' );

    function shortcode_1( $atts ) {
    
        $atts = shortcode_atts( array(
            'id' => get_current_user_id(),
        ), $atts, 'video' );
        
        if( ! $atts['id'] ) {
            return 'pas de video trouvé'; 
        }
        
        $user = get_userdata( $atts['id'] );
        
        return $user->user_firstname;
    }
    add_shortcode( 'video', 'shortcode_1' );
?>