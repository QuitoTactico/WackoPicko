FROM php:7.4-apache
LABEL maintainer="Adam Doupe <adamdoupe@gmail.com>"

# Install dependencies with retry logic
RUN apt-get update && \
    (apt-get install -y \
        libgd-dev \
        default-mysql-client \
    || (sleep 10 && apt-get update && apt-get install -y \
        libgd-dev \
        default-mysql-client)) && \
    docker-php-ext-install gd mysqli && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Copy application files
RUN rm -fr /var/www/html
COPY website /var/www/html
RUN chmod 777 /var/www/html/upload

# Copy configuration files
COPY current.sql /docker-entrypoint-initdb.d/
COPY create_mysql_admin_user.sh /create_mysql_admin_user.sh
COPY php.ini /usr/local/etc/php/php.ini
RUN chmod 755 /*.sh

# Enable Apache modules
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
