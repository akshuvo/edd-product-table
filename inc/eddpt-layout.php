<?php
/**
 * The Layout Shortcode
 *
 * [eddpt]
 */
function eddpt_layout_function( $atts ){

    // Check Easy_Digital_Downloads activated
    if ( !class_exists( 'Easy_Digital_Downloads' ) ) {
        return;
    }

    // Default Shortcode atts
    $defaults = apply_filters( 'eddpt_shortcode_default_atts', array(
        'id' => uniqid(),
        'thead' => true,
        'tfoot' => true,
    ) );

    // Before extract
    $shortcode_atts = shortcode_atts( $defaults, $atts );
    $shortcode_atts = apply_filters( 'eddpt_shortcode_atts_before_extract', $shortcode_atts );
    // Extract atts
    extract( $shortcode_atts );

    // Default Query
    $query = apply_filters( 'eddpt_default_query', array(
        'post_type'      => 'download',
        'posts_per_page'      => '-1',
    ) );

    $downloads = new WP_Query( $query );

    $table_columns = apply_filters( 'eddpt_table_columns', array(
        'thumbnail'      => esc_html__( 'Thumbnail', 'eddpt' ),
        'title'      => esc_html__( 'Name', 'eddpt' ),
        'content'      => esc_html__( 'Content', 'eddpt' ),
        'price'      => esc_html__( 'Price', 'eddpt' ),
        'cart'      => esc_html__( 'Add to cart', 'eddpt' ),
    ) );

    ob_start();

    ?>
    <?php do_action( 'eddpt_before_wrap', $shortcode_atts ); ?>
    <div class="eddpt-wrap eddpt-wrap-<?php echo esc_attr( $id ); ?>">
        <?php if( $downloads->have_posts() ) : ?>
            <table id="eddpt-table-<?php echo esc_attr( $id ); ?>" class="table eddpt-table">
                <?php if( $thead ) : ?>
                    <thead>
                        <tr>
                            <?php foreach ( $table_columns as $key => $table_column ) {
                                echo "<th>{$table_column}</th>";
                            } ?>
                        </tr>
                    </thead>
                <?php endif; ?>

                <tbody>
                    <?php while ( $downloads->have_posts() ) : $downloads->the_post(); ?>
                        <tr>
                            <?php foreach ( $table_columns as $key => $table_column ) : ?>
                                <?php do_action( 'eddpt_get_data_before_'.$key, get_the_ID() ); ?>
                                <td class="<?php echo esc_attr( $key ); ?>" data-title="<?php echo esc_attr( $table_column ); ?>">
                                    <?php do_action( 'eddpt_get_data_'.$key, get_the_ID() ); ?>
                                </td>
                                <?php do_action( 'eddpt_get_data_after_'.$key, get_the_ID(), $id ); ?>
                            <?php endforeach; ?>
                        </tr>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </tbody>

                <?php if( $tfoot ) : ?>
                    <tfoot>
                        <tr>
                            <?php foreach ( $table_columns as $key => $table_column ) {
                                echo "<th>{$table_column}</th>";
                            } ?>
                        </tr>
                    </tfoot>
                <?php endif; ?>
            </table>
        <?php endif; ?>
    </div>
    <script>
    jQuery(document).ready(function() {
        jQuery('#eddpt-table-<?php echo $id; ?>').DataTable( {
            "paging": false,
            "searching": false,
            "bInfo" : false
        } );
    } );
    </script>
    <?php do_action( 'eddpt_after_wrap', $shortcode_atts ); ?>

    <?php
    return ob_get_clean();
}
add_shortcode('eddpt', 'eddpt_layout_function');