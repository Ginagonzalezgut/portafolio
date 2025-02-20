<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header class="header">
        <?php
        $args = array(
            'theme-location' => 'menu-principal',
            'container' => 'nav'
        );
        wp_nav_menu($args);
        ?>
    </header>
    <main>
        <?php
        while (have_posts()): the_post();
            the_title();

            the_content();

        endwhile;
        ?>
    </main>
</body>

</html>