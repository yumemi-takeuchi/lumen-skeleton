FROM php:7.3-fpm-alpine3.9
COPY php.ini /usr/local/etc/php/

RUN apk upgrade --update
RUN apk add git

RUN docker-php-ext-install mysqli pdo pdo_mysql opcache mbstring

RUN curl -s http://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer
