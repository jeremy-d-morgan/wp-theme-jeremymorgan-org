<?php

function jm_menu_primary () {

  $html = '';

  $menu = wp_get_nav_menu_items( 'primary-menu' );

  foreach ( $menu as $item ) {

    $html .= '<div class="float-left"><a href="' . $item->{ 'url' } . '">' . $item->{ 'title' } . '</a></div>';

  }

  echo $html;

}

?>
