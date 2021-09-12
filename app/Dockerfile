FROM centos:7

ENV XDEBUG_MODE=debug
ENV XDEBUG_ENABLED=1
ENV XDEBUG_IDEKEY=idekey
ENV XDEBUG_REMOTE_AUTOSTART=1
ENV XDEBUG_MAXNESTING_LEVEL=1000
ENV XDEBUG_REMOTE_CONNECT_BACK=1
ENV XDEBUG_REMOTE_HOST=localhost
ENV XDEBUG_REMOTE_PORT=9000
ENV PHP_IDE_CONFIG=serverName=localhost

# Composerのインストール
# ミドルウェアインストール
# Laravelで必要になるmodRewriteを有効化する
RUN cd /tmp && curl -O -L http://rpms.famillecollet.com/enterprise/remi-release-7.rpm \
    && yum localinstall /tmp/remi-release-7.rpm \
    && yum update -y \
    && yum install -y --enablerepo=remi-php56 libmcrypt libmcrypt-devel php php-mcrypt php-fpm composer \
	&& php-pecl-xdebug php-devel php-mbstring php-pdo php-gd libffi-devel \
    && php-mcrypt php-zlib php-zip php-mysql  php-xml php-curl vim tree net-tools bind-utils ngrep nc \
    && yum clean all \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && pecl install xdebug
#     && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)\n"\
# "xdebug.remote_enable=$XDEBUG_XDEBUG_ENABLED\n"\
# "xdebug.remote_autostart=$XDEBUG_REMOTE_AUTOSTART\n"\
# "xdebug.remote_connect_back=$XDEBUG_REMOTE_CONNECT_BACK\n"\
# "xdebug.remote_port=$XDEBUG_REMOTE_PORT\n"\
# "xdebug.idekey=$XDEBUG_REMOTE_HOST\n"\
#     > /usr/local/etc/php/conf.d/xdebug.ini

# 設定ファイルをdockerコンテナ内のPHP、Apacheに読み込ませる
ADD etc/php.ini /etc/php/
ADD conf.d/000-default.conf /etc/httpd/conf.d/
