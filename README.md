Laravel
===

A simple Blog application for [How Framework](http://github.com/howframework).

* [Demo](http://hfw-laravel.phpfogapp.com/)
* [Laravel](http://laravel.com)

## Requirement

* Apache Web Server
* PHP 5.3.2 or above
* MySQL

## Installation

1. `storage` folder need to have writable permission. `chmod -Rf 777 storage/`
2. Copy and edit `application/config/application.sample.php` to `application/config/application.php`
3. Copy and edit `application/config/database.sample.php` to `application/config/database.php`
4. Create a new database, we suggest to use MySQL `create database howframework_laravel`.
5. Update database configuration based on you MySQL configuration in `application/config/database.php`:

		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => 'localhost',
			'database' => 'howframework_laravel',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
		),
6. Run `php artisan migrate:install` to run migration table installation.
7. Run `php artisan migrate` to update you're database to latest migration. 

## Running the Application

You can access the application from http://localhost/laravel/public/, change `localhost/laravel` to whatever you set in your environment.

## Documentation

* [Phase I - Authentication](https://github.com/howframework/Laravel/wiki/Phase-I:-Authentication)