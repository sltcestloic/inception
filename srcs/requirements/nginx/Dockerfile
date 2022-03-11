FROM debian:buster

RUN apt-get update && apt-get upgrade -y \
	&& apt-get install -y nginx openssl

CMD ["nginx", "-g", "daemon off;"]