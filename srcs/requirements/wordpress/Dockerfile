FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y wget php-fpm php-mysql curl

ENV WP_ADMIN=${WP_ADMIN}
ENV WP_APASS=${WP_APASS}
ENV WP_AMAIL=${WP_AMAIL}
ENV WP_USER=${WP_USER}
ENV WP_PASS=${WP_PASS}
ENV WP_MAIL=${WP_MAIL}
ENV WP_TITLE=${WP_TITLE}
ENV WP_URL=${WP_URL}
ENV DB_NAME=${DB_NAME}
ENV DB_USER=${DB_USER}
ENV DB_PASS=${DB_PASS}
ENV DB_HOST=${DB_HOST}

# WORDPRESS INSTALLATION 

RUN wget https://wordpress.org/latest.tar.gz \
	&& mkdir -p /var/www/html/wordpress \
	&& tar xzvf latest.tar.gz --strip-components=1 -C /var/www/html/wordpress \
	&& chmod o+w /var/www/html/wordpress/wp-content

COPY config/www.conf /etc/php/7.3/fpm/pool.d/
COPY config/wp-cli.sh wp_cli.sh 

# WP-CLI INSTALLATION

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar \
	&& mv wp-cli.phar /usr/local/bin/wp

EXPOSE 9000

CMD sleep infinity