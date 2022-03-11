FROM debian:buster

RUN apt-get update && apt-get upgrade -y \
	&& apt-get install -y nginx openssl

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]