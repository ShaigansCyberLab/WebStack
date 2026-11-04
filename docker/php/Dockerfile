FROM php:8.5-fpm

WORKDIR /var/www/html
# Update selected Debian packages
RUN apt-get update \
    && apt-get install -y --no-install-recommends --only-upgrade \
        apt \
        libapt-pkg7.0 \
        linux-libc-dev \
        tzdata \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql

COPY --chown=www-data:www-data src/ /var/www/html/

EXPOSE 9000

CMD ["php-fpm"]