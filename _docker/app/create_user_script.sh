#!/bin/bash

WORDPRESS_ADMIN="${WORDPRESS_ADMIN##*=}"
WORDPRESS_PASSWORD="${WORDPRESS_PASSWORD##*=}"
WORDPRESS_MAIL="${WORDPRESS_MAIL##*=}"
MYSQL_DATABASE="${MYSQL_DATABASE##*=}"
MYSQL_PASSWORD="${MYSQL_PASSWORD##*=}"

SQL_QUERY="USE ${MYSQL_DATABASE};

INSERT INTO wp_options (option_name, option_value, autoload) VALUES
('active_plugins', 'a:2:{i:0;s:30:\"advanced-custom-fields/acf.php\";i:1;s:33:\"classic-editor/classic-editor.php\";}', 'yes')
ON DUPLICATE KEY UPDATE option_value = VALUES(option_value);

-- Permalinks
UPDATE wp_options
SET option_value = '/%postname%/'
WHERE option_name = 'permalink_structure'
  AND option_value = '';


UPDATE wp_users
SET user_pass = MD5('${WORDPRESS_PASSWORD}'),
    user_email = '${WORDPRESS_MAIL}',
    user_registered = NOW(),
    user_status = 0
WHERE user_login = '${WORDPRESS_ADMIN}';

INSERT INTO wp_users (user_login, user_pass, user_email, user_registered, user_status)
SELECT '${WORDPRESS_ADMIN}', MD5('${WORDPRESS_PASSWORD}'), '${WORDPRESS_MAIL}', NOW(), 0
FROM DUAL
WHERE NOT EXISTS (
    SELECT 1
    FROM wp_users
    WHERE user_login = '${WORDPRESS_ADMIN}'
);

INSERT INTO wp_usermeta (user_id, meta_key, meta_value)
SELECT ID, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}' FROM wp_users WHERE user_login = '${WORDPRESS_ADMIN}' LIMIT 1
ON DUPLICATE KEY UPDATE
    meta_value = VALUES(meta_value);

INSERT INTO wp_usermeta (user_id, meta_key, meta_value)
SELECT ID, 'nickname', '${WORDPRESS_ADMIN}' FROM wp_users WHERE user_login = '${WORDPRESS_ADMIN}' LIMIT 1
ON DUPLICATE KEY UPDATE
    meta_value = VALUES(meta_value);

INSERT INTO wp_usermeta (user_id, meta_key, meta_value)
SELECT ID, 'rich_editing', 'true' FROM wp_users WHERE user_login = '${WORDPRESS_ADMIN}' LIMIT 1
ON DUPLICATE KEY UPDATE
    meta_value = VALUES(meta_value);

INSERT INTO wp_usermeta (user_id, meta_key, meta_value)
SELECT ID, 'syntax_highlighting', 'true' FROM wp_users WHERE user_login = '${WORDPRESS_ADMIN}' LIMIT 1
ON DUPLICATE KEY UPDATE
    meta_value = VALUES(meta_value);

INSERT INTO wp_usermeta (user_id, meta_key, meta_value)
SELECT ID, 'admin_color', 'fresh' FROM wp_users WHERE user_login = '${WORDPRESS_ADMIN}' LIMIT 1
ON DUPLICATE KEY UPDATE
    meta_value = VALUES(meta_value);

INSERT INTO wp_usermeta (user_id, meta_key, meta_value)
SELECT ID, 'show_admin_bar_front', 'true' FROM wp_users WHERE user_login = '${WORDPRESS_ADMIN}' LIMIT 1
ON DUPLICATE KEY UPDATE
    meta_value = VALUES(meta_value);

INSERT INTO wp_usermeta (user_id, meta_key, meta_value)
SELECT ID, 'wp_user_level', '10' FROM wp_users WHERE user_login = '${WORDPRESS_ADMIN}' LIMIT 1
ON DUPLICATE KEY UPDATE
    meta_value = VALUES(meta_value);



"

# Output the SQL query to the container logs
#echo "Executing SQL Query: $SQL_QUERY" >&2

# Write the SQL query to a file in the container
echo "$SQL_QUERY" > /docker-entrypoint-initdb.d/3_create_user.sql

# Execute the SQL query
mysql -h localhost -u root -p"${MYSQL_PASSWORD}" < /docker-entrypoint-initdb.d/3_create_user.sql
