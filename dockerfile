# 1. Image officielle PHP avec extensions nécessaires
FROM php:8.2-cli

# 2. Installer les dépendances système (pour Composer, PDO, etc.)
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip \
    # Vérifier que pgsql est bien installé
    && php -m | grep pgsql

# 3. Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Copier le code Laravel dans le conteneur
WORKDIR /var/www
COPY . .

# 5. Installer les dépendances PHP (sans les packages de dev)
RUN composer install --no-dev --optimize-autoloader

# 6. Générer une clé d'app (uniquement si pas déjà faite via APP_KEY dans Render)
RUN php artisan config:cache

# 7. Port à exposer pour Render
EXPOSE 10000

# 8. Commande de démarrage : migration + serveur
CMD php artisan migrate --force && php artisan serve --host 0.0.0.0 --port 10000
