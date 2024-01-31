# Use the official PHP 8.2 Apache base image
FROM php:8.2-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install required dependencies
RUN apt-get update && \
    apt-get install -y \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip

# Enable required PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache modules
RUN a2enmod rewrite

# Copy the Laravel application files to the container
COPY . .

# Set permissions for Laravel
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Expose port 80 for Apache
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
