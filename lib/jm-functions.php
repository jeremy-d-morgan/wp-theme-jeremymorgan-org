<?php

/**
 * Not Used
 */
function jm_menu_primary () {

  $html = '';

  $menu = wp_get_nav_menu_items( 'primary-menu' );

  foreach ( $menu as $item ) {

    $html .= '<div class="float-left"><a href="' . $item->{ 'url' } . '">' . $item->{ 'title' } . '</a></div>';

  }

  echo $html;

}//jm_menu_primary()


/**
 * jm_eight_bit_frame()
 *
 * Returns HTML for the 8-bit styled frame
 *
 */
function jm_eight_bit_frame ( $content, $classes, $echo ) {

  $html = '
    <div class="eight-bit-frame '. htmlspecialchars( $classes ) .'">
      <div class="eight-bit-frame-row eight-bit-frame-row-top">
        <div class="eight-bit-frame-border eight-bit-frame-border-top-left"></div>
        <div class="eight-bit-frame-border eight-bit-frame-border-top"></div>
        <div class="eight-bit-frame-border eight-bit-frame-border-top-right"></div>
      </div>
      <div class="eight-bit-frame-row eight-bit-frame-row-middle">
        <div class="eight-bit-frame-border eight-bit-frame-border-left"></div>
        <div class="eight-bit-frame-content">
          ' . $content . '
        </div>
        <div class="eight-bit-frame-border eight-bit-frame-border-right"></div>
      </div>
      <div class="eight-bit-frame-row eight-bit-frame-row-bottom">
        <div class="eight-bit-frame-border eight-bit-frame-border-bottom-left"></div>
        <div class="eight-bit-frame-border eight-bit-frame-border-bottom"></div>
        <div class="eight-bit-frame-border eight-bit-frame-border-bottom-right"></div>
      </div>
    </div>
  ';

  if ( $echo ) {

    echo $html;

  } else {

    return $html;

  }

}//jm_eight_bit_frame()

?>
