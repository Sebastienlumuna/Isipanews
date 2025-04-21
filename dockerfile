# Étape build
FROM composer:latest AS build
WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader

# Étape runtime
FROM php:8.1-fpm
RUN apt-get update && apt-get install -y libpq-dev \
 && docker-php-ext-install pdo_pgsql
COPY --from=build /app /var/www/html
WORKDIR /var/www/html
CMD ["php-fpm"]
