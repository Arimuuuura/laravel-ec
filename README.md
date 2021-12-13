# Laravel8 で作る ECサイト

## Information
```
mysql      : 5.7
php        : 7.4
nginx      : 1.2
phpMyAdmin : latest
Laravel    : 8.*
    - laravel-debugbar
    - laravel/breeze : 1.*
```
## Setup
```angular2html
$ git clone https://github.com/y-arimura1222/laravel-ec.git
$ cd laravel-ec
$ cp .env.example .env
$ cp src/.env.example src/.env
$ cp -r src/public/images src/storage/app/public/products
$ cp -r src/public/images src/storage/app/public/shops
$ docker-compose up -d --build
$ docker-compose exec app sh
$ composer install
$ php artisan key:generate
$ php artisan migrate:fresh --seed
$ exit

web :
http://localhost:8080
phpMyAdmin :
http://localhost:8888/

<!-- docker compose down -->
$ docker-compose down
```

### If you want to create your own environment using this docker-compose
```angular2html
$ git clone https://github.com/y-arimura1222/laravel-ec.git
$ cd laravel-ec
$ rm -r src
$ cp .env.example .env

*** Please rewrite this file to your own environment laravel-ec/.env ***

*** -----
The docker/php/Dockerfile and docker/php/laravel-install.sh are specifications for creating Laravel-ec.
There are many packages that are not needed just for checking the operation.
Edit it to suit your environment before the next command execution. 
----- ***

$ docker-compose up -d --build
$ docker-compose exec app sh < ./docker/php/laravel-install.sh
```

#### If you have successfully installed Laravel8.* rewrite the environment variables
`laravel-ec/src/.env`

## Operation check
```angular2html
$ docker-compose exec app sh
$ php artisan migrate

*** If the command is successful ***
$ exit

web :
http://localhost:8080

phpMyAdmin :
http://localhost:8888/
```

Enjoy Laravel8.* simulation!

Thank you!
