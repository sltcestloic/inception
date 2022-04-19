all:
	mkdir -p volumes
	docker-compose -f srcs/docker-compose.yml up -d

build:
	docker-compose -f srcs/docker-compose.yml build

up:
	docker-compose -f srcs/docker-compose.yml up -d

down:
	docker-compose -f srcs/docker-compose.yml down

fclean:
	rm -rf volumes
	docker image rm -f nginx wordpress mariadb
	docker-compose -f srcs/docker-compose.yml down -v

re: fclean all

.PHONY: re fclean down up build all