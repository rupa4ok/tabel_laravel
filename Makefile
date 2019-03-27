test:
		composer run-script phpunit
serve:
	    php artisan serve
install:
		composer install
env:
		cp .env.example .env
key:
		php artisan key:generate
        php artisan config:cache
lint:
		composer run-script phpcs -- --standard=PSR12  app routes tests
