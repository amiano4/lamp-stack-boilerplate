# LAMP Stack Boilerplate

This repository contains a ready-to-use Docker-based LAMP stack for PHP web development. It is designed to be lightweight, clean, and framework-agnostic, making it suitable for Laravel, Symfony, WordPress, or plain PHP projects.

> **Note:** This boilerplate was created to provide a personal, consistent development environment for PHP projects across multiple machines.

## Prerequisites

Before you begin, make sure you have the following installed on your machine:

- [Docker](https://www.docker.com/) (Engine and CLI)
- [Docker Compose](https://docs.docker.com/compose/) (v2 or newer)
- Git (to clone the repository)

## Features

- **PHP 8.3** with Apache
- **MySQL 8** database
- _(Optional)_ **phpMyAdmin** for database management
- **Composer** for dependency management
- Optional: **Laravel Installer** and **Symfony CLI**
- Central `projects/` directory for all web apps

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/amiano4/lamp-stack-boilerplate.git
cd lamp-stack-boilerplate
```

### 2. Start the environment

```bash
docker-compose up -d
```

### 3. Access services

- **Main web server:** [http://localhost:8080](http://localhost:8080)
- _(Optional)_ **phpMyAdmin:** [http://localhost:8081](http://localhost:8081) — phpMyAdmin is disabled by default. To enable it, uncomment the `phpmyadmin` service in `docker-compose.yml`.
  (_Refer to `.env` for the correct credentials_)

### 4. Start working on your project

Begin development inside the `projects/` directory. For example:

```
projects/my-app/index.php
projects/another-app/public/index.php
```

You may adjust the `DocumentRoot` in the Apache virtual host config for framework-specific needs (e.g. Laravel `public/`, Symfony `public/`).

## Environment Variables

You can edit the `.env` file to customize MySQL root password and database names.

## Laravel & Symfony Support (Optional)

To use CLI tools from within the context of your project directory, first access the container and navigate to your project root:

```bash
docker exec -it <PHP_CONTAINER_NAME> bash && cd /var/www/html/projects
```

Then you can run PHP, Composer, Laravel, or Symfony commands as needed.

You can work on framework-based or agnostic projects directly from the container using CLI tools. For example:

```bash
# Run PHP commands
php -v

# Use Composer to install dependencies
composer install

# Create a new Laravel project (if Laravel Installer is enabled)
laravel new my-laravel-app

# Run Symfony CLI commands (if installed)
symfony check:requirements

# To exit the CLI
exit
```

To enable Laravel or Symfony CLI tools, uncomment the corresponding lines in the `Dockerfile`.

## Volumes

Database and other persistent files are stored in the `volumes/` directory (ignored by Git). A `.gitkeep` file is included to retain the folder structure.

## License

MIT — free to use, modify, and distribute.
