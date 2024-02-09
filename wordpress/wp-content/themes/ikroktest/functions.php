<?php
define('BASE_FONT_SIZE', 23.5608);
//styles and scripts
function enqueue_styles()
{
        $manifest = json_decode(file_get_contents(get_template_directory(). '/mix-manifest.json'), true);

        wp_enqueue_style('ikrok-style', get_template_directory_uri() . $manifest['/assets/css/style.min.css'], [], null);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

//image sizes
add_image_size('image_first_block', 555, 418, true);

function img_width_to_svg($imagePath) {
    $fileExtension = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
    $width = 0;
    if ($fileExtension === 'svg') {
        $svgContent = file_get_contents($imagePath);
        $svg = new SimpleXMLElement($svgContent);
        $width = (int)$svg['width'];
    } else {
        $imageInfo = getimagesize($imagePath);
        if ($imageInfo !== false) {
            $width = $imageInfo[0];
        }
    }
    $widthEm = $width/23.5608;
    return $widthEm;
}
function enqueue_acf_script() {
    // Підключення jQuery
    wp_enqueue_script('jquery');


}

add_action('admin_enqueue_scripts', 'enqueue_acf_script');
function enqueue_acf_inline_script() {

    ?>
    <style>.acf-image-uploader .image-wrap img[src$=".svg"]
        {
            min-height: auto;
            min-width: auto;
        }</style>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            $('.acf-field .acf-field-65c4d85fcaf70 img').on('load', function() {

                const repeaterRow = $(this).closest('.acf-row');
                const imageWidth = $(this).width();
                const imageWidthEm = (imageWidth/<?php echo BASE_FONT_SIZE; ?>).toFixed(4);

                repeaterRow.find('.acf-field-65c4d9cb23e97.acf-field-range input').val(imageWidthEm);

            });
            var myCallback = function( field ){
                $('.acf-field .acf-field-65c4d85fcaf70 img').on('load', function() {

                    const repeaterRow = $(this).closest('.acf-row');
                    const imageWidth = $(this).width();
                    const imageWidthEm = (imageWidth/<?php echo BASE_FONT_SIZE; ?>).toFixed(4);

                    repeaterRow.find('.acf-field-65c4d9cb23e97.acf-field-range input').val(imageWidthEm);

                });
            };

            acf.addAction('append_field/key=field_65c4d85fcaf70', myCallback);



            $('.acf-field .acf-field-65c5119116ca4 img').on('load', function() {

                const repeaterRow = $(this).closest('.acf-row');
                const imageWidth = $(this).width();
                const imageWidthEm = (imageWidth/<?php echo BASE_FONT_SIZE; ?>).toFixed(4);

                repeaterRow.find('.acf-field-65c5119116ca5.acf-field-range input').val(imageWidthEm);

            });
            var myCallback2 = function( field ){
                $('.acf-field .acf-field-65c5119116ca4 img').on('load', function() {

                    const repeaterRow = $(this).closest('.acf-row');
                    const imageWidth = $(this).width();
                    const imageWidthEm = (imageWidth/<?php echo BASE_FONT_SIZE; ?>).toFixed(4);

                    repeaterRow.find('.acf-field-65c5119116ca5.acf-field-range input').val(imageWidthEm);

                });
            };

            acf.addAction('append_field/key=field_65c5119116ca4', myCallback2);





            $('.acf-field .acf-field-65c50f037590c img').on('load', function() {

                const repeaterRow = $(this).closest('.acf-fields');
                const imageWidth = $(this).width();
                const imageWidthEm = (imageWidth/<?php echo BASE_FONT_SIZE; ?>).toFixed(4);

                repeaterRow.find('.acf-field-range.acf-field-65c50f44b7346 input').val(imageWidthEm);

            });
            var myCallback3 = function( field ){
                $('.acf-field .acf-field-65c50f037590c img').on('load', function() {

                    const repeaterRow = $(this).closest('.acf-fields');
                    const imageWidth = $(this).width();
                    const imageWidthEm = (imageWidth/<?php echo BASE_FONT_SIZE; ?>).toFixed(4);

                    repeaterRow.find('.acf-field-range.acf-field-65c50f44b7346 input').val(imageWidthEm);

                });
            };

            acf.addAction('append_field/key=field_65c50f037590c', myCallback3);
        });
    </script>
    <?php
}

add_action('admin_footer', 'enqueue_acf_inline_script');
