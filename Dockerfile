# Use the official WordPress image as the base image
FROM wordpress:latest

# Set environment variables
ENV WORDPRESS_DB_HOST=your_db_host
ENV WORDPRESS_DB_USER=your_db_user
ENV WORDPRESS_DB_PASSWORD=your_db_password
ENV WORDPRESS_DB_NAME=your_db_name

# Copy the content of your WordPress site into the container
COPY . /var/www/html/

# Set the correct permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]

