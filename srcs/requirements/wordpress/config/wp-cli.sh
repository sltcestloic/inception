cp /var/www/html/wordpress/wp-config-sample.php /var/www/html/wordpress/wp-config.php
sed -i "s/database_name_here/${DB_NAME}/g" /var/www/html/wordpress/wp-config.php
sed -i "s/username_here/${DB_USER}/g" /var/www/html/wordpress/wp-config.php
sed -i "s/password_here/${DB_PASS}/g" /var/www/html/wordpress/wp-config.php
sed -i "s/localhost/${DB_HOST}/g" /var/www/html/wordpress/wp-config.php
wp --allow-root --path='/var/www/html/wordpress/' core install --url=$WP_URL --title=$WP_TITLE --admin_user=$WP_ADMIN --admin_password=$WP_APASS --admin_email=$WP_AMAIL
wp --allow-root --path='/var/www/html/wordpress/' user create $WP_USER $WP_MAIL --user_pass=$WP_PASS --porcelain
php-fpm7.3 -R -F
