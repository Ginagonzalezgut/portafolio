<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <?php
        $args = array(
            'theme-location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'menu'
        );
        wp_nav_menu($args);
        ?>
    </header>