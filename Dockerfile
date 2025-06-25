# Utilise une image Laravel avec PHP, Composer, Node.js
FROM bitnami/laravel:10

# Copie tous les fichiers du projet dans le conteneur
COPY . /app

# Définit le dossier de travail
WORKDIR /app

# Donne les bonnes permissions
RUN chown -R bitnami:bitnami /app && chmod -R 775 /app/storage /app/bootstrap/cache

# Installe les dépendances
RUN composer install --no-interaction --prefer-dist --optimize-autoloader \
    && npm install \
    && npm run build

# Expose le port Laravel
EXPOSE 8000

# Commande de démarrage
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
