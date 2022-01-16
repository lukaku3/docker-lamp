FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libicu-dev \
    libtool make libzip-dev libpng-dev \
    default-mysql-client \
    npm \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    # php.ini
    && cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini \
    # add user 
    && useradd -m -s /bin/sh -u 1000 nginx \
    # composer
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    # pecl
    && pecl install xdebug  \
    && docker-php-ext-install opcache bcmath exif zip gd pdo_mysql intl
# && docker-php-ext-configure gd --with-jpeg=/usr \
# && docker-php-ext-configure opcache --enable-opcache \
# && docker-php-ext-enable  pdo_mysql


COPY ./settings/www.conf /usr/local/etc/php-fpm.d/zzz-www.conf
COPY ./settings/php.ini /usr/local/etc/php/conf.d/docker-php.ini

# USER nginx

WORKDIR /usr/share/nginx/html
