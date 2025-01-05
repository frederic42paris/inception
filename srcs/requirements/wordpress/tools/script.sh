#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname=$MARIADB_DB_NAME --dbuser=$MARIADB_USERNAME --dbpass=$MARIADB_PASSWORD --dbhost=$MARIADB_HOST --allow-root
./wp-cli.phar core install --url=$DOMAIN_NAME --title=$WP_TITLE --admin_user=$WP_ADMIN_USERNAME --admin_password=$WP_ADMIN_PASSWORD --admin_email=$WP_ADMIN_EMAIL --allow-root
./wp-cli.phar user create $WP_USER_USERNAME $WP_USER_EMAIL --user_pass=$WP_USER_PASSWORD --allow-root


php-fpm7.4 -F