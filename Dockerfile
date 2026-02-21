FROM dunglas/frankenphp:latest

RUN install-php-extensions \
    pdo_mysql \
    gd \
    intl \
    zip \
    opcache \
    bcmath

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /PWL_2026

COPY PWL_2026/composer.json PWL_2026/composer.lock* ./

RUN composer install --no-scripts --no-autoloader --no-interaction

COPY PWL_2026/ .

RUN composer dump-autoload --optimize
RUN chown -R www-data:www-data /PWL_2026/storage /PWL_2026/bootstrap/cache

ENTRYPOINT ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]