FROM php:8.2-fpm-alpine

RUN apk add bash
RUN apk add curl

# INSTALL COMPOSER
WORKDIR /tmp
RUN curl -s https://getcomposer.org/installer -o composer-setup
RUN php composer-setup --install-dir=/usr/local/bin --filename=composer

# INSTALL NGINX
RUN apk add nginx
WORKDIR /var/www/html
COPY src .
EXPOSE 80