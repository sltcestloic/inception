FROM debian:buster

RUN apt-get update && apt-get upgrade -y \
	&& apt-get install -y proftpd

#TODO variables FTP_USER FTP_PASS FTP_GROUP
RUN addgroup ftpgroup \
        && adduser ftpuser -shell /bin/false -home /var/www/html/wordpress --gecos --disabled-password \ 
        && echo "ftpuser:password" | chpasswd \
        && adduser ftpuser ftpgroup \
        && echo /bin/false >> /etc/shells

CMD ["proftpd", "--nodaemon"]