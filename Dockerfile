FROM php:8.2-fpm-alpine

WORKDIR /var/www

# 1. Instala dependências do sistema
RUN apk update && apk add --no-cache \
    nginx \
    supervisor \
    libpng-dev \
    libzip-dev \
    icu-dev \
    libintl \
    zip \
    unzip \
    mysql-client \
    curl

# 2. Instala extensões do PHP
RUN docker-php-ext-configure intl && \
    docker-php-ext-install \
    pdo_mysql \
    gd \
    zip \
    pcntl \
    intl               # EXTENSÃO REQUERIDA PELO FILAMENT

# 3. Configura Nginx e Supervisor
RUN mkdir -p /run/nginx && \
    mkdir -p /etc/nginx/conf.d && \
    mkdir -p /var/log/supervisor

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# 4. Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# 5. Copia o projeto
COPY . .

# 6. Instala dependências (AGORA COM A EXTENSÃO INTL INSTALADA)
RUN composer install --no-dev --optimize-autoloader --no-interaction

# 7. Configura permissões
RUN chown -R www-data:www-data /var/www/storage && \
    chmod -R 775 /var/www/storage

EXPOSE 9000

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
