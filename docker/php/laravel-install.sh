echo "<-- start install laravel -->"
composer create-project --prefer-dist laravel/laravel . "8.*" --prefer-dist
echo "<-- finish install laravel -->"
php artisan -V

# Laravelのデバッガーツール
echo "<-- start install debugbar -->"
composer require barryvdh/laravel-debugbar
echo "<-- finish install debugbar -->"

# Laravel UIツール
echo "<-- start install Laravel Breeze -->"
composer require laravel/breeze "1.*" --dev
php artisan breeze:install
echo "<-- finish install Laravel Breeze -->"

# PHP 画像編集ライブラリ(GD必須)
echo "<-- start install intervention/image -->"
composer require intervention/image
echo "<-- finish install intervention/image -->"

echo "<-- start install npm -->"
npm install && npm run dev
echo "<-- finish install npm -->"
