In creating a laravel project:
  Composer create-project laravel/laravel citem

In creating table
  php artisan make:migration create_users_table

Migrating the table created to the database
  php artisan migrate

Creating model
  php artisan make:model User

Creating Controller
  php artisan make:controller FormController

update the database details
  open .env file and edit 
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=citem
  DB_USERNAME=root
  DB_PASSWORD= [enter password]

Running the project
  php artisan serve
  Ctrl + click the  [http://127.0.0.1:8000].
