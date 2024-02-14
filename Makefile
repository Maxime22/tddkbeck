build:
	docker build -t imagetddkbeck .

start:
	docker run -it -d -v ${PWD}:/app --name containertddkbeck -p 8080:80 imagetddkbeck

sh:
	docker exec -it containertddkbeck sh

test:
	docker exec containertddkbeck sh -c "php -d memory_limit=512M ./vendor/bin/phpunit --testdox"

migrate-configuration-phpunit:
	docker exec containertddkbeck sh -c "php -d memory_limit=512M ./vendor/bin/phpunit --migrate-configuration"