# laravel-mongodb
Laravel MongoDB Crud (Jquery,Ajax,Bootstrap 4)

PHP Version 7.4.33
Laravel Framework 8.83.27
MongoDB
Bootstrap 4
Jquery

Combination of 
**laravel eloquent & Query builder**

SETUP LARAVEL
1. Create Project
   - composer create-project laravel/laravel

2. Install Package
   - composer require jenssegers/mongodb

3. Configuring Your Laravel Project to Use MongoDB
'connections' => [
  'mongodb' => [
        'driver' => 'mongodb',
        'dsn' => env('DB_URI', 'mongodb+srv://username:password@<atlas-cluster-uri>/myappdb?retryWrites=true&w=majority'),
        'database' => 'myappdb',
],

4.Define Providers  app.php 
     - Jenssegers\Mongodb\MongodbServiceProvider::class,

     
For more reference please visit mongodb-laravel-integration
https://www.mongodb.com/compatibility/mongodb-laravel-intergration

