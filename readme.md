# Laravel-Mpesa integration sample code

This code aims to showcase how to integrate mobile money payments into your Laravel applications

## Installation
Clone this repo 
```bash
git clone https://github.com/osenco/Sample-Laravel-Pesa-Integration pesa
``` 
where `pesa` is your preffered name.
Navigate into the directory created and run Laravel migrations after installing composer dependencies

```bash
composer install

php artisan migrate
```
## Serve
Run `php artisan serve` to run the project using PHP's builtin development server. You should be able to vie the app in your browser

## Wait, what happened?
### M-Pesa
#### Install library
```bash
composer require osenco/mpesa
```

#### Create Controller
```bash
php artisan make:controller MpesaController
```

#### Add routes
Add the following routes in your `routes/web.php`
```php
Route::prefix('mpesa')->group(function ()
{
  Route::any('pay', 'MpesaController@pay');
  Route::any('validate', 'MpesaController@validation');
  Route::any('confirm', 'MpesaController@confirmation');
  Route::any('results', 'MpesaController@results');
  Route::any('register', 'MpesaController@register');
  Route::any('timeout', 'MpesaController@timeout');
  Route::any('reconcile', 'MpesaController@reconcile');
});
```

#### Whitelist Endpoints