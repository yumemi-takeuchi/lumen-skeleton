container = php-fpm

up:
	docker-compose up -d

build:
	docker-compose rm -vsf
	docker-compose down -v --remove-orphans
	docker-compose build
	docker-compose up -d
	docker-compose exec ${container} bash -c "cd src && composer install"
	docker-compose exec ${container} bash -c "cd src && php artisan migrate"
	docker-compose exec ${container} bash -c "cd src && php artisan db:seed"

down:
	docker-compose down

require:
	docker-compose run ${container} composer require

require-dev:
	docker-compose run ${container} composer require --dev

jumpin:
	docker-compose run ${container} bash

test:
	docker-compose run ${container} ./src/vendor/bin/phpunit ./src/tests/

test-file:
	docker-compose run ${container} ./src/vendor/bin/phpunit ./src/tests/ --group ${FILE}

stan:
	docker-compose run ${container} ./src/vendor/bin/phpstan analyse ${FILE} --level 7

cs-fixer:
	docker-compose run ${container} ./src/vendor/bin/php-cs-fixer --rules=@PSR2 fix ${FILE}

tail-logs:
	docker-compose logs -f ${container}
