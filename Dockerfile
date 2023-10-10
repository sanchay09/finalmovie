
# Use the official PHP image with Apache
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html/

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy all project files into the container
COPY . /var/www/html/

# Expose port 80 for Apache
EXPOSE 80

