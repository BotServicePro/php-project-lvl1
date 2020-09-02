install:
	composer install
make lint:
	composer run-script phpcs -- --standard=PSR12 core bin games
