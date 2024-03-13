<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Project Setup

## Install XAMPP, Composer, and Laravel

XAMPP Installation:

Download and install XAMPP (a cross-platform web server solution).
Start the XAMPP control panel and ensure that Apache and MySQL services are running.
Access http://localhost in your browser to verify that XAMPP is working.

Composer Installation:

Install Composer (a PHP dependency manager).
Verify the installation by running composer --version in your terminal.

Laravel Installation:

Open your terminal and run the following command:
composer global require laravel/installer

Once installed, you can create a new Laravel project using:
laravel new my-project

## Project Features

Install Laravel Breeze.

Laravel Breeze:
Laravel Breeze is a lightweight authentication scaffolding for Laravel.
To install Breeze, run:
```composer require laravel/breeze --dev```

Set up authentication using:
```php artisan breeze:install```


## User Authentication with Laravel Breeze:

Laravel Breeze provides login and registration functionality out of the box.
Customize the views and routes as needed.
To display client details, create a new route and controller method to fetch and show the relevant data.

## CRUD

Function to add new class (Employee) with name, phone number, email, address.
Can be edit and delete with ease.

