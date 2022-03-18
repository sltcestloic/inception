stop:
	docker stop nginx
	docker stop wordpress
	docker stop mariadb

rebuild: stop
	docker-compose -f srcs/docker-compose.yml up -d --build 