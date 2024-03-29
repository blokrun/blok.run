# blok.run engine, version: 1.03
Minimalist Ecommerce Engine running on Laravel and Filament.

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
2. Rename `.env.example` to `.env` and add your DB config and `APP_URL`, otherwise photos will be not served.
3. Go to the cloned folder with your terminal and paste this block of commands:


```
composer install
npm install
php artisan migrate
php artisan db:seed --class=LanguageSeeder
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=MediaSeeder
php artisan db:seed --class=PageSeeder
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=ProductCategorySeeder
php artisan storage:link
php artisan serve
```

`LanguageSeeder` must be first to avoid foreign key conflicts


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

![blok.run CMS Dashboard](/public/images/readme/cms-home.png)

## Design

### Option 1
[Visit Live Website &raquo;](https://1.blok.run)

![Template 1](/public/images/readme/1.blok.run.png)

[You can find Figma File here](https://www.figma.com/file/j0QLABGRvbAdRlogYbQjUq/1?type=design&node-id=1%3A2&mode=design&t=cWzkKnpqDIfzv7re-1)

## Contact Us
if you have any ideas -  [contact via email](mailto:hello@xecode.lt)
