# PHP Service Evaluation Survey with Laravel

## Welcome! 👋
This is my task - Service Evaluation Survey application built with Laravel framework.

## Features
- Show list of survey results 
- Add new survey data

## Instructions for use:
-   Clone this repository or download it as a ZIP package.
-   Open it with Visual Studio Code or your preferred code editor.
-   Create a fresh schema 'servicerating' in your MySQL server.
-   Rename **'.env.example'** file to **'.env'** inside of the project's root directory and configure the database information:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=servicerating
    DB_USERNAME=root
    DB_PASSWORD=mysql
-   Using GitBash, CMD or other terminal in your code editor:
-   if composer is installed locally: run **php <'path to composer.phar file location'>/composer.phar install**
-   if composer is installed on your system globally: run **composer install**
-   Run **php artisan key:generate**
-   Run **php artisan migrate** to create tables.
-   Run **php artisan db:seed** to fill tables with data.
-   Run **php artisan serve**
-   Follow the link that appears in the terminal after running 'php artisan serve'.

## Author 
[Roberta](https://github.com/Roberta2020)