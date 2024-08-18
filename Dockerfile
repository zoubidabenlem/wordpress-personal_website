FROM wordpress:latest

# Copy custom configuration files (if any)
COPY wp-config.php /var/www/html/wp-config.php

# Expose port 80
EXPOSE 80

