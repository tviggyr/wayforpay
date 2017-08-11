## Install

Via Composer

``` bash
$ composer require zogxray/wayforpay
```

## Laravel

#### Register Service Provider

Append the following line to the `providers` key in `config/app.php` to register the package:

```php
Zogxray\Wayforpay\WayForPayServiceProvider::class,
```

***
_The package supports auto-discovery, so if you use Laravel 5.5 or later you may skip registering the service provider and facades and instead run `php artisan package:discover`._
***

#### Register Facades _(optional)_

If you like facades, you may also append the `Wayforpay` facade to the `aliases` key:

```php
'Wayforpay' => Zogxray\Wayforpay\WayForPayFacade::class,
```

#### Publish Package Assets _(optional)_

You may additionally publish the package configuration and language file using the `vendor:publish` Artisan command:

```shell
php artisan vendor:publish --provider="Zogxray\Wayforpay\WayForPayServiceProvider"
```