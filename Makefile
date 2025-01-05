all: build

build:
	-mkdir /home/ftanon/data /home/ftanon/data/wp /home/ftanon/data/mariadb
	docker-compose -f srcs/docker-compose.yml up --build -d

stop:
	docker-compose -f srcs/docker-compose.yml stop

start:
	docker-compose -f srcs/docker-compose.yml start

clean:
	docker-compose -f srcs/docker-compose.yml down -v --rmi all --remove-orphans
	sudo rm -rf /home/ftanon/data

ls-container:	
	docker-compose -f srcs/docker-compose.yml ps

ls-volume:
	docker volume ls
	docker volume inspect mariadb
	docker volume inspect wp

ls-network:
	docker network ls

ls-all:
	docker image ls
	docker ps -a

clean-all:
	-docker stop $(docker ps -qa)
	-docker rm $(docker ps -qa)
	-docker rmi $(docker images -qa)
	-docker volume rm $(docker volume ls -q)
	-docker network rm $(docker network ls -q)

re: clean all

.PHONY: all clean fclean re

