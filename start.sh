#!/bin/sh

php artisan migrate --force
php artisan optimize:clear

exec php-fpm
