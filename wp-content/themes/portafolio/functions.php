<?php

function portafolio_menus()
{
    register_nav_menus(array(
        "menu-principal" => __('Menu Principal', 'portafolio')
    ));
}
add_action("init", "portafolio_menus");
