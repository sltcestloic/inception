FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y php-fpm php-mysql curl


COPY config/www.conf /etc/php/7.3/fpm/pool.d/

WORKDIR /var/www/html/wordpress

# WP-CLI INSTALLATION

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar \
	&& mv wp-cli.phar /usr/local/bin/wp

EXPOSE 9000

RUN service php7.3-fpm start \
	&& wp core download --allow-root

COPY config/wp-cli.sh .

CMD sh wp-cli.sh
#CMD sleep infinity