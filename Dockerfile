FROM dunglas/frankenphp

# Install dependencies needed for composer
RUN apt-get update && apt-get install -y curl git unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
