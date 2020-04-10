/// As used in roots.io sage thema + bedrock

function ajax_filter_cats() {
    $args_c = array(
		'post_type' => 'producten',
        'tax_query' => array(
            array(
                'taxonomy' => 'product-category',
                'field' => 'slug',
                'terms' => $_POST['caty'],
            )
        )
    );
    
    $query_n = new \WP_Query( $args_c );
    $counter_x = 0;

    if( $query_n->have_posts() ) :
        while( $query_n->have_posts() ): $query_n->the_post();


        echo '<a href="'. get_the_permalink() .'" class="prod__item flex-it f-col f-just-center f-align-center" id="' .get_the_ID(). '">';
		echo '<img src="'. get_field('product_foto')['url'] . '" alt="'. get_field('product_foto')['alt'] . '">';
		echo '<h3>' . get_the_title() . '</h3>';
		echo '</a>';


    $counter_x++;
        endwhile;
    wp_reset_postdata();
    endif;
die();
}


add_action('wp_ajax_catfilter', __NAMESPACE__ . '\\ajax_filter_cats');
add_action('wp_ajax_nopriv_catfilter', __NAMESPACE__ . '\\ajax_filter_cats');
