FROM php:8.2-fpm
LABEL maintainer="Mystro Ken <mystroken@gmail.com>"

# Arguments defined in docker-compose.yml
ARG user=laravel
ARG uid=1000

# Install system dependencies
#RUN php -m && echo "=============================================" \
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
    default-mysql-client && \
####### Clear cache
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
####### [PHP Extensions] \
    docker-php-ext-install pdo pdo_mysql sockets bcmath zip pcntl posix && \
    pecl install redis

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY .docker/prod.ini /usr/local/etc/php/conf.d/prod.ini
# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /usr/local/src/blog
COPY . .
RUN chown -R $user:$user .
USER $user
RUN composer install --no-dev --optimize-autoloader
EXPOSE 8000
ENTRYPOINT ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

#FROM base AS dev
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug
#COPY dev.ini /usr/local/etc/php/conf.d/dev.ini
#RUN composer install
#RUN chown -R www-data:www-data .
#USER root
