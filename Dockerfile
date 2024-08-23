# Use the official PHP image with Apache
FROM php:8.2-apache

# Install necessary PHP extensions, including mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite for Apache (optional)
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the contents of your current directory into the container
COPY . /var/www/html

# Expose port 80 to the host
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]