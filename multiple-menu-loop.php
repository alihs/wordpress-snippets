<div class="grid">
    <?php 

    // create an array of menus that need to be called
    // loop them, check if items exist and load items via wp_nav_menu
    $menus = array('footer_menu_1', 'footer_menu_2', 'footer_menu_3','footer_menu_4');
    foreach ($menus as $menu)
    {
        if ( has_nav_menu($menu) ) :
            $menu_name = $menu;
            $locations = get_nav_menu_locations();
            $menu_id = $locations[$menu];
            $menu = wp_get_nav_menu_object($menu_id);

            echo '<div class="grid__column">';
            echo '<div class="list">';
            echo '<h5 class="list__title">' . $menu->name . '</h5>';

            wp_nav_menu( array(
                'theme_location' => $menu_name,
                'container'      => false,
                'menu_class'    => 'unstyled'
            ) );

            echo '</div>';
            echo '</div>';

        endif;
    }
    ?>
</div>