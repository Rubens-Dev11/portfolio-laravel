FROM php:8.2-fpm

# Installer les extensions système
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    libpq-dev \
    libzip-dev \
    default-mysql-client \
    libmysqlclient-dev

# Installer les extensions PHP (y compris MySQL)
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www

# Copier le projetFROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    git \
    default-mysql-client \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev

# Installer les extensions PHP (y compris MySQL)
RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www

# Copier tout le projet
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Donner les bonnes permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage /var/www/bootstrap/cache

# Lancer les migrations puis le serveur Laravel
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000

COPY . .

# Installer les dépendances
RUN composer install --no-dev --optimize-autoloader

# Donner les bonnes permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage /var/www/bootstrap/cache

# Lancer les migrations puis le serveur Laravel
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000
