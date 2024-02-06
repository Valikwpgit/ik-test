<?php
//styles and scripts
function enqueue_styles()
{
        $manifest = json_decode(file_get_contents(get_template_directory(). '/mix-manifest.json'), true);

        wp_enqueue_style('ikrok-style', get_template_directory_uri() . $manifest['/assets/css/style.min.css'], [], null);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

//image sizes
add_image_size('image_first_block', 555, 418, true);
