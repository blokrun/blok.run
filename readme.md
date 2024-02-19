# blok.run engine, version: 1.02
Run Blocks on your Server to launch a Website, Ecommerce or App

#### Official page
[http://blok.run](http://blok.run)

#### Contains Packages
Laravel 10 + Fillament 3.0

#### Demo Login to Filament:
URL: [http://localhost:8000/admin/login](http://localhost:8000/admin/login)

Email: blok@blok.run 

Demo pass: blok

## Installation
1. Clone repo `git clone https://github.com/blokrun/blok.run.git`
2. Go to cloned folder with your terminal and perform these commands:

`composer install` 

`npm install` 

`php artisan migrate`

`php artisan db:seed --class=UserSeeder`

`php artisan db:seed --class=LanguageSeeder`

`php artisan db:seed --class=MediaSeeder`

`php artisan db:seed --class=PageSeeder`

`php artisan db:seed --class=ProductSeeder`

`php artisan db:seed --class=ProductCategorySeeder`

`php artisan serve`



5. Check your [http://localhost:8000](http://localhost:8000)

## Database
1. `blok.run` use `MySQL` by default as a very simple solution. 
2. If you have a very small project - you can use SQLite, to store database in file and hold it in your private repository together with app files. You will have the same information in your localhost and production. That will be easy for your App Development.

### For faster development, database Dump package is used to build migrations:
To create migrations for all the tables, run:
`php artisan migrate:generate`

#### Dump Migrations: 
[https://github.com/kitloong/laravel-migrations-generator](https://github.com/kitloong/laravel-migrations-generator)

#### Seeding:
[https://github.com/tyghaykal/laravel-seeder-generator](https://github.com/tyghaykal/laravel-seeder-generator)

`php artisan seed:generate`

## Screenshots
Filament Admin Panel

![blok.run CMS Dashboard](/public/blokrun/cms-home.png)

Website Preview
![blok.run CMS Dashboard](/public/blokrun/front-end-1.png)

#### Contact Us
if you have any ideas -  [contact via email](mailto:hello@xecode.lt)
