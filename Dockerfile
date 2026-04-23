FROM php:8.4-apache

RUN apt-get update && apt-get install -y \
    curl zip unzip git \
    libpng-dev libxml2-dev libzip-dev libonig-dev \
    && docker-php-ext-install pdo pdo_mysql zip xml mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

RUN php artisan config:cache || true
RUN php artisan route:cache || true
RUN php artisan view:cache || true

RUN chown -R www-data:www-data /var/www/html/storage
RUN a2enmod rewrite
RUN a2dismod mpm_event mpm_worker && a2enmod mpm_prefork

RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

EXPOSE 80