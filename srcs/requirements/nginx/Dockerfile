FROM debian:buster

RUN apt-get update && apt-get upgrade -y \
	&& apt-get install -y nginx openssl

COPY config/nginx_config /etc/nginx/sites-available/default
COPY config/nginx.key /etc/nginx/ssl/nginx.key
COPY config/nginx.crt /etc/nginx/ssl/nginx.crt

CMD ["nginx", "-g", "daemon off;"]