FROM php:8.5-fpm

WORKDIR /var/www/html

# Install FastCGI client and update selected Debian packages
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libfcgi-bin \
    && apt-get install -y --no-install-recommends --only-upgrade \
        apt \
        libapt-pkg7.0 \
        linux-libc-dev \
        tzdata \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Copy application source
COPY --chown=www-data:www-data src/ /var/www/html/

# Configure PHP-FPM ping endpoint
COPY php-fpm-healthcheck.conf /usr/local/etc/php-fpm.d/zz-healthcheck.conf

HEALTHCHECK --interval=30s --timeout=5s --start-period=10s --retries=3 \
    CMD SCRIPT_NAME=/ping SCRIPT_FILENAME=/ping REQUEST_METHOD=GET \
    cgi-fcgi -bind -connect 127.0.0.1:9000 | grep -q pong || exit 1

EXPOSE 9000

CMD ["php-fpm"]