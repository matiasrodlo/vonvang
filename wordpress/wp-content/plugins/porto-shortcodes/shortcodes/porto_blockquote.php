<?php

// Porto Blockquote
add_shortcode('porto_blockquote', 'porto_shortcode_blockquote');
add_action('vc_build_admin_page', 'porto_load_blockquote_shortcode');
add_action('vc_after_init', 'porto_load_blockquote_shortcode');

function porto_shortcode_blockquote($atts, $content = null) {
    ob_start();
    if ($template = porto_shortcode_template('porto_blockquote'))
        include $template;
    return ob_get_clean();
}

function porto_load_blockquote_shortcode() {
    $animation_type = porto_vc_animation_type();
    $animation_duration = porto_vc_animation_duration();
    $animation_delay = porto_vc_animation_delay();
    $custom_class = porto_vc_custom_class();

    vc_map( array(
        'name' => "Porto " . __('Blockquote', 'porto-shortcodes'),
        'base' => 'porto_blockquote',
        'category' => __('Porto', 'porto-shortcodes'),
        'icon' => 'porto_vc_blockquote',
        'weight' => - 50,
        'params' => array(
            array(
                'type' => 'textarea_html',
                'heading' => __('Quote', 'porto-shortcodes'),
                'param_name' => 'content',
                'admin_label' => true,
            ),
            array(
                'type' => 'textfield',
                'heading' => __('Footer Text 1', 'porto-shortcodes'),
                'param_name' => 'footer_before'
            ),
            array(
                'type' => 'textfield',
                'heading' => __('Footer Text 2', 'porto-shortcodes'),
                'param_name' => 'footer_after'
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'View Type', 'porto-shortcodes' ),
                'param_name' => 'view',
                'value' => array(
                    __( 'Default', 'porto-shortcodes' )=> '',
                    __( 'With Borders', 'porto-shortcodes' )=> 'with-borders'
                )
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Direction', 'porto-shortcodes' ),
                'param_name' => 'dir',
                'value' => array(
                    __( 'Default', 'porto-shortcodes' )=> '',
                    __( 'Reverse', 'porto-shortcodes' )=> 'blockquote-reverse'
                )
            ),
            array(
                'type' => 'dropdown',
                'heading' => __( 'Skin Color', 'porto-shortcodes' ),
                'param_name' => 'skin',
                'std' => 'custom',
                'value' => porto_vc_commons('colors'),
                'dependency' => array(
                    'element' => 'view',
                    'value' => array( '' )
                )
            ),
            array(
                'type' => 'colorpicker',
                'heading' => __( 'Border Color', 'porto-shortcodes' ),
                'param_name' => 'color',
                'dependency' => array(
                    'element' => 'skin',
                    'value' => array( 'custom' )
                )
            ),
            $animation_type,
            $animation_duration,
            $animation_delay,
            $custom_class
        )
    ) );

    if (!class_exists('WPBakeryShortCode_Porto_Blockquote')) {
        class WPBakeryShortCode_Porto_Blockquote extends WPBakeryShortCode {
        }
    }
}