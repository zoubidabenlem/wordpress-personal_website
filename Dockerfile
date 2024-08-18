# Use the official WordPress image as the base image
FROM wordpress:latest

# Install the SQLite integration plugin
RUN curl -O https://downloads.wordpress.org/plugin/sqlite-integration.1.8.1.zip && \
    unzip sqlite-integration.1.8.1.zip -d /usr/src/wordpress/wp-content/plugins/

# Set environment variables to use SQLite
ENV WORDPRESS_DB_TYPE=sqlite
ENV WORDPRESS_DB_NAME=/var/www/html/wp-content/database/wordpress.db

# Create the database directory
RUN mkdir -p /var/www/html/wp-content/database

# Copy the content of your WordPress site into the container
COPY . /var/www/html/

# Set the correct permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]

