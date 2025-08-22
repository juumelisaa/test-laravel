FROM php:8.3-fpm AS base

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip curl git npm \
    && docker-php-ext-install pdo mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# DEVELOPMENT STAGE
FROM base AS development
RUN chown -R www-data:www-data /var/www

# PRODUCTION STAGE
FROM base AS production
COPY app/test-react/composer.json app/test-react/composer.lock ./

RUN composer install --no-dev --optimize-autoloader --no-scripts

COPY app/test-react ./

RUN npm i
RUN npm run build

RUN chown -R www-data:www-data /var/www

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]