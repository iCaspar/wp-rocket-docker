FROM php:7.4.1-fpm

LABEL maintainer="Caspar Green"

ENV DEBIAN_FRONTEND=noninteractive
ENV PATH "$PATH:/usr/bin/git"
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install time-zone data helpers first
RUN apt-get update \
    && apt-get install -y gnupg tzdata \
    && echo "UTC" > /etc/timezone \
    && dpkg-reconfigure -f noninteractive tzdata

# Install php and extensions
RUN apt-get update \
    && apt-get install -y nano curl zip unzip git \
    && docker-php-ext-install pdo_mysql \
    && pecl install xdebug-2.9.0 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_host=192.168.1.2" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && pecl install redis-4.1.1 \
    && docker-php-ext-enable xdebug redis \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && mkdir /run/php \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY php-fpm.conf /etc/php/7.2/fpm/php-fpm.conf
