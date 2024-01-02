<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Laravel 10.x ready to start project

You may save your time to setup your project. You can start your project using this template where we have used Laravel 10.x and CoreUI out of the box Bootstrap.

## Laravel 10
As you may know, Laravel transitioned to yearly releases with the release of Laravel 8. Previously, major versions were released every 6 months. This transition is intended to ease the maintenance burden on the community and challenge our development team to ship amazing, powerful new features without introducing breaking changes. Therefore, we have shipped a variety of robust features to Laravel 9 without breaking backwards compatibility.

Therefore, this commitment to ship great new features during the current release will likely lead to future "major" releases being primarily used for "maintenance" tasks such as upgrading upstream dependencies, which can be seen in these release notes.

Laravel 10 continues the improvements made in Laravel 9.x by introducing argument and return types to all application skeleton methods, as well as all stub files used to generate classes throughout the framework. In addition, a new, developer-friendly abstraction layer has been introduced for starting and interacting with external processes. Further, Laravel Pennant has been introduced to provide a wonderful approach to managing your application's "feature flags".

## PHP 8.1
Laravel 10.x requires a minimum PHP version of 8.1.

## Features

* Bootstrap 5, CoreUI
* Landing Page
  * Tailwind


# User Guide

## Installation

Follow the steps mentioned below to install and run the project.

1. Clone or download the repository
2. Go to the project directory (cd laavel-coreui) and run `composer install` and `npm install`
    1. It will install all the laravel (PHP) packages by the command `composer install` (if you do not have `composer` then install it - https://getcomposer.org/download/)
    2. It will install all the NPM packages by the command `npm install` (if you do not have npm then install it - https://nodejs.org/en/download)
3. Create `.env` file by copying the `.env.example`.
4. Run the command `composer run-script post-create-project-cmd` to APP_KEY
5. Update the database name and credentials in `.env` file
6. Run the command `php artisan migrate --seed`
7. Run the command `php artisan db:seed --class=UserSeeder` to create user, it will generate some dummy data.
8. Link storage directory: `php artisan storage:link`
9. Run the application using this command: `php artisan serve` from the project root and also run the command for vite server `npm run de` and visit `http://127.0.0.1:8000`

# Login 
email: `super@admin.com` 
password: `secret`


# Screenshots
Login View
![login](https://prnt.sc/zeHRc5TqFMbN)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
