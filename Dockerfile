FROM bitnami/laravel:10
COPY . /app
WORKDIR /app
RUN chown -R bitnami:bitnami /app && chmod -R 775 /app/storage /app/bootstrap/cache
RUN composer install --no-interaction --prefer-dist --optimize-autoloader \
    && npm install \
    && npm run build
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
