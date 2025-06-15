FROM php:8.3-apache

# Install required system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    zip unzip git curl gnupg2 libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip mysqli \
    && a2enmod rewrite

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Optional: Install Symfony CLI
# Uncomment the lines below if you plan to develop Symfony projects
# RUN curl -sS https://get.symfony.com/cli/installer | bash \
#     && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Optional: Install Laravel Installer globally via Composer
# Uncomment if you plan to scaffold or manage Laravel projects
# RUN composer global require laravel/installer \
#     && echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> /root/.bashrc

# Add Composer global binaries to system PATH (Laravel CLI, if installed)
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Set default working directory for web projects
WORKDIR /var/www/html/projects
