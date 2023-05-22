FROM php:8.1.16-apache
RUN apt update && apt install -y libonig-dev
RUN docker-php-ext-install pdo_mysql mysqli

WORKDIR /var/www/html