.PHONY: down log logs ps up

.DEFAULT_GOAL := up
NAME					:= com.dblx.test
FILES 				:= -f docker/docker-compose.yml

down:
	docker-compose ${FILES} down --volumes

log logs:
	docker-compose ${FILES} logs -f --tail 20

ps:
	docker-compose ${FILES} ps

up: down
	DOCKER_BUILDKIT=1 docker build -f docker/Dockerfile ./ -t ${NAME}:local
	docker-compose ${FILES} up -d

