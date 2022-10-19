FROM php:7.2-fpm-alpine

COPY --from=composer:2.0.6 /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install pdo pdo_mysql
