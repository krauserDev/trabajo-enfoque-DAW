FROM php:8.1-fpm
RUN apt-get update && apt-get install -y libzip-dev zip unzip git && docker-php-ext-install pdo_mysql zip && rm -rf /var/lib/apt/lists/*
WORKDIR /var/www/html
EXPOSE 9000
CMD ["php-fpm"]
