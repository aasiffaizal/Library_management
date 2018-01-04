
# Library Management System

The url for the project is :

You can find the working project in that url.

In order to make the Project run in your System the following installation are provided below.

## LAMP

LAMP(Linux, Apache, MySQL, PHP) installation steps can be found [here](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04)

The database can be accessed using any app you are comfortable with. Since I used phpmyadmin. I am adding the installation method of it.

## PHPmyadmin

The installations can be found [here](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-16-04)

## CakePHP Framework

This web application is made using CakePHP 3.5.10

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

In order for the application to work, composer need to be installed.

## Composer Installation

Installing composer Locally
1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

Installing composer globally
`apt-get install composer`

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
