FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y php-fpm php-mysql curl


COPY config/www.conf /etc/php/7.3/fpm/pool.d/

WORKDIR /var/www/html

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar \
	&& mv wp-cli.phar /usr/local/bin/wp

EXPOSE 9000

RUN service php7.3-fpm start \
	&& wp core download --allow-root

COPY config/wp-cli.sh .

RUN mkdir manuvolution

COPY manuvolution/css/* manuvolution/css/
COPY manuvolution/img/* manuvolution/img/
COPY manuvolution/index.html manuvolution/

CMD sh wp-cli.sh