<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Add second options page under 'Basic Options'
Container::make( 'theme_options', __( 'Кофигурация темы' ) )
    ->set_icon('dashicons-carrot')
    ->add_tab( 'Шапка', array(
        Field::make( 'select', 'crb_header_logic', 'Логотип в виде:' ) -> add_options(array(
            'yes' => 'Использовать логотип' ,
            // 'no' =>  'Использовать название',
        )),   
        Field::make( 'image', 'crb_header_logo', 'Изображение' ) -> set_conditional_logic(array(
            'relation'=> 'AND',
            array(
                'field' => 'crb_header_logic',
                'value' => 'yes',
                'compare' => '=',
            )
        )) ->set_value_type( 'url' ),
        Field::make( 'text', 'crb_header_name', 'Название Бренда' ) -> set_conditional_logic(array(
            'relation'=> 'AND',
            array(
                'field' => 'crb_header_logic',
                'value' => 'no',
                'compare' => '=',
            )
        )),
        Field::make( 'text', 'crb_header_discription', 'Подзаголовок Бренда' )-> set_conditional_logic(array(
            'relation'=> 'AND',
            array(
                'field' => 'crb_header_logic',
                'value' => 'no',
                'compare' => '=',
            )
        )),

    ))
    ->add_tab( 'Подвал' , array(
        Field::make( 'select', 'crb_footer_logic', 'Логотип в виде:' ) -> add_options(array(
            'yes' => 'Использовать логотип' ,
            // 'no' =>  'Использовать название' ,
        )),
        Field::make( 'image', 'crb_footer_logo', 'Изображение' ) -> set_conditional_logic(array(
            'relation'=> 'AND',
            array(
                'field' => 'crb_footer_logic',
                'value' => 'yes',
                'compare' => '=',
            )
        )) ->set_value_type( 'url' ),
        Field::make( 'text', 'crb_footer_name', 'Название Бренда' ) -> set_conditional_logic(array(
            'relation'=> 'AND',
            array(
                'field' => 'crb_footer_logic',
                'value' => 'no',
                'compare' => '=',
            )
        )),
        Field::make( 'text', 'crb_footer_discription', 'Подзаголовок Бренда' ) -> set_conditional_logic(array(
            'relation'=> 'AND',
            array(
                'field' => 'crb_footer_logic',
                'value' => 'no',
                'compare' => '=',
            )
        )),
    
));
