ENV_EXAMPLE = .env.example
ENV = .env
PUBLIC_IMAGES = src/public/images
LOCAL_PRODUCTS_IMAGES = src/storage/app/public/products
LOCAL_SHOPS_IMAGES = src/storage/app/public/shops

up:
	docker-compose up

down:
	docker-compose down

app:
	docker-compose exec app sh

init:
	cp $(ENV_EXAMPLE) $(ENV)
	cp src/$(ENV_EXAMPLE) src/$(ENV)
	cp -r $(PUBLIC_IMAGES) $(LOCAL_PRODUCTS_IMAGES)
	cp -r $(PUBLIC_IMAGES) $(LOCAL_SHOPS_IMAGES)
	docker-compose up -d --build
	docker-compose exec app composer install
	docker-compose exec app php artisan key:generate
	docker-compose exec app php artisan migrate:fresh --seed
	exit
