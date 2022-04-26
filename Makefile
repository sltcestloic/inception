all:
	mkdir -p /home/lbertran/data/wp-volume
	mkdir -p /home/lbertran/data/db-volume
	docker-compose -f srcs/docker-compose.yml up -d

build:
	docker-compose -f srcs/docker-compose.yml build

up:
	docker-compose -f srcs/docker-compose.yml up -d

down:
	docker-compose -f srcs/docker-compose.yml down

fclean:
	rm -rf /home/lbertran/data/wp-volume
	rm -rf /home/lbertran/data/db-volume
	docker image rm -f nginx wordpress mariadb
	docker-compose -f srcs/docker-compose.yml down -v

re: fclean all

.PHONY: re fclean down up build all