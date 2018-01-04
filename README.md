
# Library Management System

The url for the project is : [http://52.88.200.174](http://52.88.200.174)

You can find the working project in that url.

In order to make the Project run in your System the following installation are provided below.

The database structure along with some test data is in the folder. The name of the sql file is Library_management.sql

## LAMP

LAMP(Linux, Apache, MySQL, PHP) installation steps can be found [here](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04).

The database can be accessed using any app you are comfortable with. Since I used phpmyadmin. I am adding the installation method of it.

## PHPmyadmin

The installations can be found [here](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-16-04).

Once phpmyadmin is installed, it should be added to the apache server. The commands to add it to the apache server is given below

Open apache configuration

`sudo nano /etc/apache2/apache2.conf`

Once you opened it, add the following line at the end.

`Include /etc/phpmyadmin/apache.conf`

restart apache after that

`service apache2 restart`

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
