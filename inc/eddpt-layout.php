<?php
/**
 * The Layout
 */
add_shortcode('eddpt', 'eddpt_layout_function');
function eddpt_layout_function( $atts ){

    if ( !class_exists( 'Easy_Digital_Downloads' ) ) {
        return;
    }

    ?>
    <div class="eddpt-wrap">

    </div>
    <?php
}
