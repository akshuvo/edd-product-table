<?php

// Thumbnail column
if ( !function_exists('eddpt_get_data_thumbnail') ) {
	function eddpt_get_data_thumbnail( $post_id ){
		?>
		<?php if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) : ?>
			<div class="edd_download_image">
				<?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
			</div>
		<?php endif; ?>
		<?php
	}
}
add_action( 'eddpt_get_data_thumbnail', 'eddpt_get_data_thumbnail' );

// Title column
if ( !function_exists('eddpt_get_data_title') ) {
	function eddpt_get_data_title( $post_id ){
		?>
		<a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php
	}
}
add_action( 'eddpt_get_data_title', 'eddpt_get_data_title' );

// Content column
if ( !function_exists('eddpt_get_data_content') ) {
	function eddpt_get_data_content( $post_id ){
		?>
		<?php $excerpt_length = apply_filters( 'excerpt_length', 30 ); ?>
		<?php $item_prop = edd_add_schema_microdata() ? ' itemprop="description"' : ''; ?>
		<?php if ( has_excerpt() ) : ?>
			<div<?php echo $item_prop; ?> class="edd_download_excerpt">
				<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_excerpt', get_the_ID() ), $excerpt_length ) ); ?>
			</div>
		<?php elseif ( get_the_content() ) : ?>
			<div<?php echo $item_prop; ?> class="edd_download_excerpt">
				<?php echo apply_filters( 'edd_downloads_excerpt', wp_trim_words( get_post_field( 'post_content', get_the_ID() ), $excerpt_length ) ); ?>
			</div>
		<?php endif; ?>
		<?php
	}
}
add_action( 'eddpt_get_data_content', 'eddpt_get_data_content' );

// Price column
if ( !function_exists('eddpt_get_data_price') ) {
	function eddpt_get_data_price( $post_id ){
		?>
		<div class="eddpt-price">
			<?php
			if ( edd_has_variable_prices( get_the_ID() ) ) {
				echo edd_price_range( get_the_ID() );
			} else {
				edd_price( get_the_ID(), true );
			}
			?>
		</div>
		<?php
	}
}
add_action( 'eddpt_get_data_price', 'eddpt_get_data_price' );

// Price column
if ( !function_exists('eddpt_get_data_cart') ) {
	function eddpt_get_data_cart( $post_id ){
		?>
		<div class="edd_download_buy_button">
			<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
		</div>
		<?php
	}
}
add_action( 'eddpt_get_data_cart', 'eddpt_get_data_cart' );