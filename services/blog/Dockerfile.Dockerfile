FROM php:8.2-fpm as build-stage

WORKDIR /usr/local/src

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libpq-dev \
    libzip-dev && \
    apt-get install -y \
    git \
    unzip \
    zip \
    sqlite3 \
    openssh-client \
    default-mysql-client

RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN chown -R www-data:www-data .
RUN docker-php-ext-install pdo pdo_mysql sockets bcmath zip pcntl posix
RUN pecl install redis
COPY . .
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

FROM base AS dev
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
COPY ./docker/dev.ini /usr/local/etc/php/conf.d/dev.ini
RUN composer install
RUN chown -R www-data:www-data .
USER root

FROM base AS prod
COPY ./docker/prod.ini /usr/local/etc/php/conf.d/prod.ini
RUN composer install --no-dev
RUN chown -R www-data:www-data .
USER root