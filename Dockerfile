FROM php:8.2-apache

# Installer extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copier ton code
COPY . /var/www/html/

EXPOSE 80
