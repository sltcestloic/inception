FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y wget php-fpm php-mysql

RUN wget https://wordpress.org/latest.tar.gz \
	&& mkdir -p /var/www/html/wordpress \
	&& tar xzvf latest.tar.gz --strip-components=1 -C /var/www/html/wordpress \
	&& chmod o+w /var/www/html/wordpress/wp-content 

COPY config/www.conf /etc/php/7.3/fpm/pool.d/

EXPOSE 9000

CMD service php7.3-fpm start && sleep infinity