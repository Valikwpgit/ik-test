#!/bin/bash

WORDPRESS_DIR="/var/www/wordpress"

if [ ! -d "$WORDPRESS_DIR/wp-content" ]; then
 curl -o latest.tar.gz https://wordpress.org/latest.tar.gz
     tar -xvf latest.tar.gz
     rm latest.tar.gz
#     wp plugin install classic-editor --activate
curl -o classic-editor.zip https://downloads.wordpress.org/plugin/classic-editor.zip
unzip classic-editor.zip -d /var/www/wordpress/wp-content/plugins/
rm classic-editor.zip

curl -o advanced-custom-fields.zip https://downloads.wordpress.org/plugin/advanced-custom-fields.zip
unzip advanced-custom-fields.zip -d /var/www/wordpress/wp-content/plugins/
rm advanced-custom-fields.zip


fi

exec "$@"

echo "Command has finished executing."
