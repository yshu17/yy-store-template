<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
add_action( 'wp_ajax_search-ajax', 'esp_ajax_action_callback');
add_action('wp_ajax_nopriv_search-ajax' , 'esp_ajax_action_callback' );

function esp_ajax_action_callback() {
    if(!wp_verify_nonce($_POST['nonce'], 'search-nonce')){
        wp_die('Не тот сервер');
    }
    $arg = array(
        'post_type'=> array('post', 'product'),
        'post_status'=> 'publish',
        's' => $_POST['s']

    );

    if (strlen($_POST['s']) >= 4) { // Проверяем длину введенного значения
        $query_ajax= new WP_Query($arg);
        ob_start(); // Не указываем флаг

        if ( $query_ajax->have_posts() ) {
            while( $query_ajax->have_posts() ) {
                $query_ajax->the_post();
                ?>
                <div class="search_result">
                    <div class="title-search">
                        <a href="<?php echo get_permalink(); ?>" class="text-decoration-none">
                            <?php echo get_the_title();?>
                        </a>
                    </div>
                </div>
                <?php
            }
        } else {
            ?>
            <div class="search_result">
                <h4 class="pt-3 text-center">Product is not found</h4>
            </div>
            <?php
        }
        $json_data['out'] = ob_get_clean(); // Присваиваем значение переменной без добавления "1" в начале
    } else {
        $json_data['out'] = ''; // Пустая строка, если длина строки меньше 4
    }
    wp_send_json( $json_data );
    wp_die();
}

