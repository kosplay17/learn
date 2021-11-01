add_action( 'wp_footer', 'artabr_lm_footer_scripts' );
function artabr_lm_footer_scripts() {

	wp_enqueue_script( 'artabr_lm_ajax', get_template_directory_uri() . '/js/ajax.js', true );
	wp_enqueue_script( 'historyjs', get_template_directory_uri() . '/js/history.js', true );

	// Add parameters for the JS
	global $wp_query;
	$max   = $wp_query->max_num_pages;
	$paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
	wp_localize_script(
		'artabr_lm_ajax',
		'mts_ajax_loadposts',
		array(
			'startPage'     => $paged,
			'maxPages'      => $max,
			'nextLink'      => next_posts( $max, false ),
			'i18n_loadmore' => __( ' Показать еще...', 'mythemeshop' ),
			'i18n_nomore'   => __( ' Больше нет', 'mythemeshop' ),
			'i18n_loading'  => __( ' Загрузка...', 'mythemeshop' ),
		)
	);

}