FROM php:8.5-fpm

WORKDIR /var/www/html

RUN docker-php-ext-install pdo_mysql

COPY --chown=www-data:www-data src/ /var/www/html/

EXPOSE 9000

CMD ["php-fpm"]