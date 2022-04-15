FROM debian:buster

RUN apt-get update && apt-get upgrade -y \
	&& apt-get install -y nginx openssl

COPY config/nginx_config /etc/nginx/sites-available/default
COPY config/lbertran.42.fr.key /etc/nginx/ssl/lbertran.42.fr.key
COPY config/lbertran.42.fr.crt /etc/nginx/ssl/lbertran.42.fr.crt

CMD ["nginx", "-g", "daemon off;"]