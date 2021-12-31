FROM composer:1 AS composer
FROM php:7.4-fpm

USER root

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && useradd -m dbf

RUN pecl install dbase
RUN docker-php-ext-enable dbase

COPY ./data/* /usr/local/etc/php/conf.d/

WORKDIR /php-dbf
