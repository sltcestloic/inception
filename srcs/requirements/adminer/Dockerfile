FROM debian:buster

RUN apt-get update && apt-get upgrade -y \
	&& apt-get install -y curl php-fpm php-mysql

WORKDIR /var/www/html/adminer

RUN curl -fsSL "http://www.adminer.org/latest.php" -o index.php \
	&& chown -R www-data:www-data index.php \
	&& chmod 755 index.php

CMD php -S 0.0.0.0:888