FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    curl

RUN docker-php-ext-install pdo pdo_pgsql mbstring bcmath gd zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

COPY nginx.conf /etc/nginx/nginx.conf

EXPOSE 80

COPY start.sh /start.sh
RUN chmod +x /start.sh

CMD service nginx start && /start.sh

