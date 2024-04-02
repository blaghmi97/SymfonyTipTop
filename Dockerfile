# Use an official PHP runtime as a parent image
FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www
RUN docker-php-ext-install pdo pdo_mysql

# Install dependencies for Symfony
# Copy the current directory contents into the container at /var/www
COPY . /var/www

# Set permissions for the Symfony application
RUN chown -R www-data:www-data /var/www
RUN chown -R www-data:www-data var
RUN chmod -R 777 var/cache var/log
# Expose port 9000 and start php-fpm server
EXPOSE 9000

CMD ["php-fpm"]


