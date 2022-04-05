FROM php:apache

RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN docker-php-ext-install mysqli pdo pdo_mysql