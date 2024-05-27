<?php
add_action('acf/init', 'register_cta_block');

function register_cta_block() {
  // Check if function exists.
  if ( function_exists('acf_register_block_type') ) {
      acf_register_block_type(array(
        'name'              => 'cta-block',
        'title'             => __('CTA'),
        'description'       => __('A custom CTA block.'),
        'render_template'   => plugin_dir_path(__FILE__) . '../templates/block-template-cta.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        'keywords'          => array( 'cta', 'cta block' ),
        'supports'          => array(
            'align'         => true,
        ),
    ));
  }
}