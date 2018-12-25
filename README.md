# laravel-jd-logistic
Laravel 5 京东物流接口


## Installation

The ActionLog Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`arthuryinzhen/laravel-jd-logistic` package and setting the `minimum-stability` to `dev` (required for Laravel 5) in your
project's `composer.json`.

```json
{
    "require": {
           "arthuryinzhen/laravel-jd-logistic": "dev-master"
    },
   
}
```

or

Require this package with composer:
```
composer require arthuryinzhen/laravel-jd-logistic dev-master
```

Update your packages with ```composer update``` or install with ```composer install```.


## Usage

To use the ActionLog Service Provider, you must register the provider when bootstrapping your Laravel application. There are
essentially two ways to do this.

Find the `providers` key in `config/app.php` and register the ActionLog Service Provider.

```php
    'providers' => [
        // ...
        
        'Arthuryinzhen\JDLogistic\JDLogisticServiceProvider',
    ]
```
for Laravel 5.1+
```php
    'providers' => [
        // ...
        Arthuryinzhen\JDLogistic\JDLogisticServiceProvider::class,
    ]
```

Find the `aliases` key in `config/app.php`.

```php
    'aliases' => [
        // ...
        'JDLogistic' => 'Arthuryinzhen\JDLogistic\Facades\JDLogistic',
    ]
```
for Laravel 5.1+
```php
    'aliases' => [
        // ...
        'JDLogistic' => Arthuryinzhen\JDLogistic\Facades\JDLogistic::class,
    ]
```



## Configuration

To use your own settings, publish config.

```$ php artisan vendor:publish```

`config/JdLogistic.php`

```php

	'client' => [
            'appKey'      => env('JD_CLIENT_APP_KEY', '26EAC2509056EB38FB623D9A49296D2C'),
            'appSecret'   => env('JD_CLIENT_APP_SECRET', '1abdc5a97ecb4594ab7b772296bcfbbd'),
            'accessToken' => env('JD_CLIENT_ACCESS_TOKEN', '1f1d3048-220a-484d-ad93-f3808d9aacc1'),
            'serverUrl'   => env('JD_CLIENT_SERVER_URL', 'https://api.jd.com/routerjson'),
        ],
```

## Last Step

modify you `.env` 

```env

JD_CLIENT_APP_KEY=
JD_CLIENT_APP_SECRET=
JD_CLIENT_ACCESS_TOKEN=
JD_CLIENT_SERVER_URL="https://api.jd.com/routerjson"

```

## Demo

```
public function getTest(Request $request)
{
    $array = $request->input();
    $lotus = new JDLogisticRepository();
    $result = $lotus->ldopWaybillReceiveRequest($array);
    dd($result);
}
```


