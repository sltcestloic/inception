FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y wget php-fpm php-mysql

RUN wget https://wordpress.org/latest.tar.gz \
	&& mkdir -p /var/www/html/wordpress \
	&& tar xzvf latest.tar.gz --strip-components=1 -C /var/www/html/wordpress \
	&& chmod o+w /var/www/html/wordpress/wp-content

EXPOSE 9000

CMD sleep infinity