FROM nginx:1.31-alpine

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY --from=webstack-php:dev /var/www/html /var/www/html

EXPOSE 80