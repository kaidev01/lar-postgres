# docker/php/Dockerfile

FROM php:8.2-fpm

# Cài đặt các gói cần thiết
RUN apt-get update && \
  apt-get install -y --no-install-recommends \
  git \
  curl \
  libpq-dev \
  libzip-dev \
  vim \
  zip \
  unzip \
  supervisor && \
  docker-php-ext-install pdo pdo_pgsql zip && \
  docker-php-ext-enable pdo pdo_pgsql zip && \
  pecl install redis && \
  docker-php-ext-enable redis && \
  apt-get clean && rm -rf /var/lib/apt/lists/*


# Cài đặt Node.js 18 và npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
  apt-get install -y nodejs

# Kiểm tra phiên bản Node và npm
RUN node -v && npm -v

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# php.ini
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

# Set folder working
WORKDIR /var/www

# Copy 
COPY ./src /var/www

# Install application dependencies
RUN composer install

# Set proper permissions for Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Supervisor
COPY ./docker/php/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# RUN 
# CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

CMD ["php-fpm"]
