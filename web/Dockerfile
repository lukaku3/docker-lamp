FROM php:5.6-apache

# PHPのインストール
RUN apt-get update \
    && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        openssl libssl-dev \
        libxml2-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt pdo_mysql mbstring xml tokenizer zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysql \
    && pear channel-update pear.php.net \
    && pear upgrade-all \
    && pear config-set auto_discover 1 \
    && pear install DB

# apacheのrewriteを有効にする
RUN cd /etc/apache2/mods-enabled \
    && ln -s ../mods-available/rewrite.load \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer \
    && echo 'alias ll="ls -la"' > /root/.bashrc \
    && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime 

COPY ./etc/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html

