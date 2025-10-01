FROM php:8.2-apache

# Installer les extensions nécessaires
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copier les fichiers du projet si nécessaire
COPY . /var/www/html/

# Donner les bons droits (facultatif mais conseillé)
RUN chown -R www-data:www-data /var/www/html
