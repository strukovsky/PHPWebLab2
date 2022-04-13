# Stryukovsky PIN-34 Lab2

# Setup

### Setup database

```shell
psql
create user u8191062 with encrypted password '<YOUR PASSWORD>';
create database u8191062_lab2;
grant all privileges on database u8191062_lab2 to u8191062;
```

### Install Composer locally

```shell
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

php composer.phar install

```

### Setup PgSQL connection in .env

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=u8191062_lab2
DB_USERNAME=u8191062
DB_PASSWORD=<YOUR PASSWORD>
```

### Migrate 

```shell
php artisan migrate:install
php artisan migrate:fresh
```

### Populate DB
```shell
php artisan db:seed
```

### Run server

```shell
php artisan serv      
```
