<?php

function custom_breadcrumbs() {
    // Настройки
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Home';
     
    // Получаем данные из глобальных объектов
    global $post, $wp_query;
     
    // Начинаем выводить HTML хлебных крошек
    echo '<div class="bread-crumbs">';
     
    // Добавляем элемент "Главная" (или другой нужный вам текст)
    echo '<a href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a>';
    echo '<svg class="icon"><use xlink:href="#ico-crumb"/></svg>';
     
    if ( is_single() ) {
        // Посты
        $category = get_the_category();
        if ( !empty( $category ) ) {
            $last_category = end( array_values( $category ) );
            $cat_parents = rtrim( get_category_parents( $last_category->term_id, true, ',' ), ',' );
            $cat_parents = explode( ',', $cat_parents );
            foreach ( $cat_parents as $parent ) {
                echo '<span class="item-cat">' . $parent . '</span>';
                echo '<svg class="icon"><use xlink:href="#ico-crumb"/></svg>';
            }
        }
        echo '<span class="item-current">' . get_the_title() . '</span>';
    } elseif ( is_category() ) {
        // Категории
        echo '<span class="item-current">' . single_cat_title( '', false ) . '</span>';
    } elseif ( is_page() ) {
        // Страницы
        if ( $post->post_parent ) {
            $parents = get_post_ancestors( $post->ID );
            foreach ( array_reverse( $parents ) as $parent_id ) {
                echo '<a href="' . get_permalink( $parent_id ) . '">' . get_the_title( $parent_id ) . '</a>';
                echo '<svg class="icon"><use xlink:href="#ico-crumb"/></svg>';
            }
        }
        echo '<span class="item-current">' . get_the_title() . '</span>';
    } elseif ( is_home() ) {
        // Блог
        echo '<span class="item-current">' . single_post_title( '', false ) . '</span>';
    } elseif ( is_archive() ) {
        // Архивы
        if ( is_author() ) {
            $author = get_queried_object();
            echo '<span class="item-current">Author: ' . $author->display_name . '</span>';
        } elseif ( is_tag() ) {
            echo '<span class="item-current">Tag: ' . single_tag_title( '', false ) . '</span>';
        } elseif ( is_day() ) {
            echo '<span class="item-current">Day: ' . get_the_date() . '</span>';
        } elseif ( is_month() ) {
            echo '<span class="item-current">Month: ' . get_the_date( 'F Y' ) . '</span>';
        } elseif ( is_year() ) {
            echo '<span class="item-current">Year: ' . get_the_date( 'Y' ) . '</span>';
        } elseif ( is_tax() ) {
            $term = get_queried_object();
            echo '<span class="item-current">Taxonomy: ' . $term->name . '</span>';
        } else {
            echo '<span class="item-current">' . post_type_archive_title( '', false ) . '</span>';
        }
    } elseif ( is_search() ) {
        // Страница результатов поиска
        echo '<span class="item-current">Search results for: ' . get_search_query() . '</span>';
    } elseif ( is_404() ) {
        // Страница 404
        echo '<span class="item-current">Error 404</span>';
    }
     
    echo '</div>';
}

?>