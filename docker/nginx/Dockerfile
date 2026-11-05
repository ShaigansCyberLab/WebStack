FROM nginx:1.31-alpine

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY src/ /var/www/html/

EXPOSE 80