<footer>
    <div class="col-1">
        <img src="<?php echo get_site_icon_url(); ?>" alt="<?php bloginfo('name'); ?>">
    </div>

    <?php
    $locations = get_nav_menu_locations();
    $menu_id_col_1 = $locations['footer-col-1'];
    $menu_id_col_2 = $locations['footer-col-2'];
    $menu_id_col_3 = $locations['footer-col-3'];
    $menu_id_col_4 = $locations['footer-col-4'];

    $menu_items_col_1 = wp_get_nav_menu_items($menu_id_col_1);
    $menu_items_col_2 = wp_get_nav_menu_items($menu_id_col_2);
    $menu_items_col_3 = wp_get_nav_menu_items($menu_id_col_3);
    $menu_items_col_4 = wp_get_nav_menu_items($menu_id_col_4);

    if ($menu_items_col_1) {
        foreach ($menu_items_col_1 as $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            echo '<a class="col-2" href="' . esc_url($url) . '">' . esc_html($title) . '</a>';
        }
    }

    if ($menu_items_col_2) {
        foreach ($menu_items_col_2 as $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            echo '<a class="col-3" href="' . esc_url($url) . '">' . esc_html($title) . '</a>';
        }
    }

    if ($menu_items_col_3) {
        foreach ($menu_items_col_3 as $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            echo '<a class="col-4" href="' . esc_url($url) . '">' . esc_html($title) . '</a>';
        }
    }

    if ($menu_items_col_4) {
        foreach ($menu_items_col_4 as $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            echo '<a class="col-5" href="' . esc_url($url) . '">' . esc_html($title) . '</a>';
        }
    }
    ?>

    <div class="col-6 search">
    <div class="search-panel">
        <input type="text" placeholder="Найти магазин">
        <button><svg class="icon"><use xlink:href="#ico-search"/></svg></button>
    </div>
    </div>

    <div class="col-6">
        <?php get_social_in_footer(); ?>
    </div>

    <?php get_info_in_footer(); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>