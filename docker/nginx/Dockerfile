FROM nginx:1.31-alpine

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY src/ /var/www/html/

EXPOSE 80

# Check whether Nginx can serve the application health endpoint
HEALTHCHECK --interval=30s --timeout=5s --start-period=10s --retries=3 \
    CMD curl -fsS http://127.0.0.1/health || exit 1