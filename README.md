# Getting started

## Installation

Clone the repository

    git clone git@github.com:marielsabornido/assessment-app.git

Switch to the repo folder

    cd assessment-app

Install all the dependencies using composer

    composer install

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the database seeder

    php artisan db:seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:marielsabornido/assessment-app.git
    cd assessment-app
    composer install
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan db:seed
    php artisan serve

## Admin Credentials
Email: admin@laravel
Password: admin123