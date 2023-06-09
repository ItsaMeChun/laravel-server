FROM php:8.1-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite

RUN pecl install mongodb && docker-php-ext-enable mongodb

WORKDIR /var/www/html

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
