<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# TSA-5: Laravel Pages with Static Data

A Laravel project with four pages: a landing page, an about page, a Customer Accounts page, and a User Accounts page. The account pages use static PHP arrays as a temporary data source, which are looped in Blade views using `@foreach`. A database will be added in a later activity.

## Author

Janina Charisse Torre

## Tech Stack

- Laravel 12
- PHP 8.2
- Blade templating engine
- XAMPP (local development environment)

## Pages and Routes

| Page              | URL          | Controller                 | View                  |
|-------------------|--------------|----------------------------|-----------------------|
| Landing           | `/`          | `PageController@home`      | `home.blade.php`      |
| About             | `/about`     | `PageController@about`     | `about.blade.php`     |
| Customer Accounts | `/customers` | `CustomerController@index` | `customers.blade.php` |
| User Accounts     | `/users`     | `UserController@index`     | `users.blade.php`     |

All routes are defined in `routes/web.php`.

## Features

- Four named routes (`home`, `about`, `customers`, `users`)
- `PageController` for the landing and about pages
- `CustomerController` and `UserController`, each with a static array of 5 sample records
- Shared Blade layout (`layouts/app.blade.php`) using `@extends`, `@section`, and `@yield`
- `@foreach` loops to display records in the Customer Accounts and User Accounts tables
- Navigation bar linking all four pages, with the current page highlighted
- Pink and baby blue pastel design written in plain CSS

## Project Structure (relevant files)

```
app/
└── Http/
    └── Controllers/
        ├── PageController.php
        ├── CustomerController.php
        └── UserController.php
resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── home.blade.php
    ├── about.blade.php
    ├── customers.blade.php
    └── users.blade.php
routes/
└── web.php
```

## Installation and Setup

Requirements: PHP 8.2 or higher and Composer.

1. Clone the repository:
   ```
   git clone https://github.com/jxninxtorre/TSA-5.git
   cd TSA-5
   ```
2. Install dependencies:
   ```
   composer install
   ```
3. Create the environment file and generate the app key:
   ```
   copy .env.example .env
   php artisan key:generate
   ```
   (On macOS or Linux, use `cp .env.example .env`.)
4. Start the Artisan development server:
   ```
   php artisan serve
   ```
5. Open the app in your browser:
   ```
   http://127.0.0.1:8000
   ```

## Sample Data

**Customer Accounts** fields: ID, Name, Email, Phone, City

**User Accounts** fields: ID, Username, Email, Role, Status (Active, Inactive, or Suspended)

The data is hard-coded in the controllers and is for demonstration only.

## Notes

- The `vendor` folder and `.env` file are not included in the repository. Use the setup steps above to generate them.
- No database is used in this version.
