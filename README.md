# Laravel 8 with nginx and mysql docker
## Usage
1. jalankan perintah
- `docker-compose up -d --build site`
- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

2. untuk menjalankan perintah migrate
` docker exec php php /var/www/html/artisan make:migration add_column_google `