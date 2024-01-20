
# Use an official WordPress image as the base
FROM wordpress:latest

ENV COMPOSER_ALLOW_SUPERUSER=1
# Set working directory
WORKDIR /var/www/html

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libxml2-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the WordPress files into the container
COPY . /var/www/html

# Install composer dependencies
# RUN composer install

RUN npm install acorn

# Expose port 80 for web server
EXPOSE 80
