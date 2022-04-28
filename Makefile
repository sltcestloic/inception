#WP_VOLUME_PATH = /home/lbertran/data/wp-volume
#DB_VOLUME_PATH = /home/lbertran/data/db-volume
WP_VOLUME_PATH = volumes/wp
DB_VOLUME_PATH = volumes/db

all:
	mkdir -p ${WP_VOLUME_PATH}
	mkdir -p ${DB_VOLUME_PATH}
	docker-compose -f srcs/docker-compose.yml up -d

build:
	docker-compose -f srcs/docker-compose.yml build

up:
	docker-compose -f srcs/docker-compose.yml up -d

down:
	docker-compose -f srcs/docker-compose.yml down

fclean:
	rm -rf ${DB_VOLUME_PATH}
	rm -rf ${WP_VOLUME_PATH}
	docker image rm -f nginx wordpress mariadb ftp
	docker-compose -f srcs/docker-compose.yml down -v

re: fclean all

.PHONY: re fclean down up build all