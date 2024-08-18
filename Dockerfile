# Use an official PHP image as a base
FROM php:7.4-apache

# Install required PHP extensions for WordPress
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Install and enable mod_rewrite for Apache
RUN a2enmod rewrite

# Copy the WordPress files into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Set the correct permissions
RUN chown -R www-data:www-data /var/www/html/

