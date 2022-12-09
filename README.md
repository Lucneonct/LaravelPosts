⚡ An app that show you how laravel works with migrations and slug posts

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## What I need?
First of all you need the following technologies:
* [PHP](https://www.php.net/manual/en/install.php)
* [Composer](https://getcomposer.org/)
* [MySQL](https://dev.mysql.com/downloads/installer/)

## Spoiler
![App Gif](https://media3.giphy.com/media/3qZMTN7KJe5UeACyNV/giphy.gif?cid=790b7611ccd9238d0bedcea7ac89a4099e2c5ec8df3bfaf9&rid=giphy.gif&ct=g)

## What to do now?
You must to do the following instructions:

1. Install PHP dependencies
```bash
composer install
```
2. Create a database into your MySQL
```bash
mysql -u YOUR_MYSQL_USER -p # After this, use your password
create database DATABASE_NAME # Use the name you wish
```
3. Make a copy of `.env.example` and rename it as `.env`
```bash
cp .env.example .env # Create a copy in linyx
```
4. Change the variables `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` with your credentials
```
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_MYSQL_USER
DB_PASSWORD=YOUR_MYSQL_PASSWORD
```
5. Make the migrations of the database
```bash 
php artisan migrate
```
6. Start the server
```bash
php artisan serve # You can access to it at localhost:8000
```
7. As you see, there is no posts yet. If you want to see it, you must seed the database
```bash
php artisan db:seed
```