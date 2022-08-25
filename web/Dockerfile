FROM php:8.1-apache

# 設定ファイルをdockerコンテナ内のPHP、Apacheに読み込ませる
ADD etc/php.ini /usr/local/etc/php/
ADD conf.d/000-default.conf /etc/apache2/sites-enabled/

# Composerのインストール
# ミドルウェアインストール
# Laravelで必要になるmodRewriteを有効化する
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer \
    && apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev mariadb-client-10.5 \
    && pecl install xdebug \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql mysqli \
    && docker-php-ext-enable xdebug \
    && mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled \
    && /bin/sh -c a2enmod rewrite

