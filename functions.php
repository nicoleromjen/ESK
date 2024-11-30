<?php
function esk_register_stylesheet() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "esk_register_stylesheet");

function esk_remove_gutenberg() {
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}

    add_theme_support( 'menus' );

    add_action( 'init', 'register_my_menus' );

    function register_my_menus() {
        register_nav_menus(
            array(
                'primary-menu' => __( 'Primary Menu' ),
                'secondary-menu' => __( 'Secondary Menu' )
            )
        );
    }

    class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {
        public function start_lvl(&$output, $depth = 0, $args = null) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
        }
    
        public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $indent = ($depth) ? str_repeat("\t", $depth) : '';
            $li_classes = [];
            if (!empty($item->classes)) {
                $li_classes = (array) $item->classes;
            }
            $li_classes[] = 'nav-item';
            if ($args->walker->has_children) {
                $li_classes[] = 'dropdown';
            }
            $li_class = join(' ', apply_filters('nav_menu_css_class', array_filter($li_classes), $item, $args));
    
            $output .= "$indent<li class=\"$li_class\">";
            $link_class = $depth > 0 ? 'dropdown-item' : 'nav-link';
            if ($args->walker->has_children) {
                $link_class .= ' dropdown-toggle';
            }
            $atts = array(
                'class' => $link_class,
                'href' => !empty($item->url) ? $item->url : '',
            );
            $attributes = '';
            foreach ($atts as $attr => $value) {
                if (!empty($value)) {
                    $attributes .= " $attr=\"" . esc_attr($value) . "\"";
                }
            }
            $output .= '<a' . $attributes . '>';
            $output .= apply_filters('the_title', $item->title, $item->ID);
            $output .= '</a>';
        }
    }
    
    function esk_register_scripts() {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, null, true);
        wp_enqueue_script('jquery');
        wp_enqueue_script(
            'esk-bootstrap', 
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', 
            array(), 
            '5.3.3', 
            true
        );
        wp_enqueue_script('esk-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery'), null, true);
        wp_enqueue_script(
            'header-toggle',
            get_template_directory_uri() . '/js/header-toggle.js',
            array(),
            null, 
            true 
        );    
    }
    
    add_action('wp_enqueue_scripts', 'esk_register_scripts');
    
    add_action ('init', 'esk_remove_gutenberg');
    add_filter('use_block_editor_for_post', '__return_false');
    
    add_image_size('my_custom_size', 50, 50, false);

    add_filter('pll_get_post_types', function($post_types) {
        $post_types['acf-field-group'] = 'acf-field-group';
        return $post_types;
    });


    add_filter('pll_copy_post_metas', function($metas) {

        $field_groups = acf_get_field_groups();
    
        foreach ($field_groups as $group) {

            if ($group['key'] === 'group_66fe78ad43c34') { 
      
                $fields = acf_get_fields($group['exp']);
                if ($fields) {
                    foreach ($fields as $field) {
            
                        $metas[] = $field['exp'];
                        $metas[] = 'exppara';
                    }
                }
            }
        }
    
        return $metas;
    });

    function tags_categories_support_all() {
        register_taxonomy_for_object_type('post_tag', 'page');
        register_taxonomy_for_object_type('category', 'page');  
      }
      

      function tags_categories_support_query($wp_query) {
        if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
        if ($wp_query->get('category_name')) $wp_query->set('post_type', 'any');
      }
      

      add_action('init', 'tags_categories_support_all');
      add_action('pre_get_posts', 'tags_categories_support_query');

    function esk_register_strings() {
        pll_register_string("ESK", "Resultater");
        pll_register_string("ESK", "Livestream");

        pll_register_string("ESK", "Nyttige Links");

        pll_register_string("ESK", "Hold");
        pll_register_string("ESK", "Istræning pr. uge");
        pll_register_string("ESK", "Off-ice pr. uge");
        pll_register_string("ESK", "Leje af skøjter pr. måned");
        pll_register_string("ESK", "Kontingent pr. periode (Efterår/Forår)");
        pll_register_string("ESK", "Lektioner");
        pll_register_string("ESK", "Kontingent pr. måned");
        pll_register_string("ESK", "Kontingent samlet");
    
        pll_register_string("ESK", "Øvrige Priser");
        pll_register_string("ESK", "Skøjteleje pr. måned");
        pll_register_string("ESK", "Skøjteslibning pr. gang (egne skøjter)");
        pll_register_string("ESK", "Lektion ved Igor/Lena");
        pll_register_string("ESK", "Lektion ved Marie Louise");
        pll_register_string("ESK", "Extra træning lørdage");
        pll_register_string("ESK", "Klubnåleprøve udenfor normal træningstid");
        pll_register_string("ESK", "Klubnåle");

        pll_register_string("ESK", "Tilmeld dig til prøvetime");

pll_register_string("ESK", "Point");
pll_register_string("ESK", "Varighed");
pll_register_string("ESK", "time");
pll_register_string("ESK", "timer");
pll_register_string("ESK", "Over 8");
pll_register_string("ESK", "Opgave");
pll_register_string("ESK", "Formand");
pll_register_string("ESK", "Kasserer");
pll_register_string("ESK", "Medlem bestyrelse");
pll_register_string("ESK", "Medlem udvalg");
pll_register_string("ESK", "Træningsgange på is");


    }
    add_action("init", "esk_register_strings"); 
