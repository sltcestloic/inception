FROM debian:buster

RUN apt-get update && apt-get upgrade -y \
	&& apt-get install -y mariadb-server mariadb-client

ARG DB_NAME
ARG DB_USER
ARG DB_PASS
ARG DB_ROOT
ARG DB_RPASS

RUN service mysql start\
	&& mariadb -u root -e\
	"CREATE DATABASE ${DB_NAME};\
	CREATE USER ${DB_USER}@'%' IDENTIFIED BY '${DB_PASS}';\
	GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO ${DB_USER}@'%';\
	ALTER USER ${DB_ROOT}@'localhost' IDENTIFIED BY '${DB_RPASS}';"

CMD ["mysqld", "--bind-address=0.0.0.0"]
