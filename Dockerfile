FROM dunglas/frankenphp:latest

RUN install-php-extensions \
    pdo_mysql \
    gd \
    intl \
    zip \
    opcache \
    bcmath

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# COPY PWL_2026/composer.json PWL_2026/composer.lock* ./
COPY POS/composer.json POS/composer.lock* ./

RUN composer install --no-scripts --no-autoloader --no-interaction

# COPY PWL_2026/ .
COPY POS/ .

RUN composer dump-autoload --optimize
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

ENTRYPOINT ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]