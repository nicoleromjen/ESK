<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("esk") ?></title>
    <?php wp_head() ?>
</head>
<div class="head">
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/logo/esklogo.png" alt="logo" style="width: 80px; height: 80px;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <?php
wp_nav_menu(array(
'menu' => 'primary',
    'container' => '',
    'theme_location' => 'primary',
    'menu_class' => 'primary-menu navbar-nav',
    'items_wrap' => '<ul id="primary-menu" class="primary-menu">%3$s</ul>',
    'depth' => 2, 
    'fallback_cb' => false,
    'walker' => new WP_Bootstrap_Navwalker(),
));
?>
                </div>
            </div>
        </nav>
    </div>


<div class='container'>