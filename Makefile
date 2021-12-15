PUBLIC_IMAGES = src/public/images
LOCAL_PRODUCTS_IMAGES = src/storage/app/public/products
LOCAL_SHOPS_IMAGES = src/storage/app/public/shops

up:
	docker-compose up

down:
	docker-compose down

app-ssh:
	docker-compose exec app sh

init:
	cp .env.example .env
	cp src/.env.example src/.env
	cp -r $(PUBLIC_IMAGES) $(LOCAL_PRODUCTS_IMAGES)
	cp -r $(PUBLIC_IMAGES) $(LOCAL_SHOPS_IMAGES)
	docker-compose up -d --build
	docker-compose exec app sh
	composer install
	php artisan key:generate
	php artisan migrate:fresh --seed
	exit