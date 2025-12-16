#!/bin/sh

php artisan migrate --force
php artisan optimize:clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

chmod -R 775 storage bootstrap/cache
exec php-fpm
