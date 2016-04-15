Lob Package for Laravel
============

Laravel Facade and Service Provider for Lob\Lob.

This is a copy of this package https://github.com/upwebdesign/laravel-lob which is no longer available in https://packagist.org

Installation
---
To use, simply install the package via Composer and then add the following to your app/config/app.php to the service providers array:

```php
'Upwebdesign\Lob\LobServiceProvider',
```

Then add to the aliases array the following:
```php
'Lob' => 'Upwebdesign\Lob\Facade',
```

Publish config file via `php artisan config:publish upwebdesign/laravel-lob`.

### Usage

You will now have access to the lob-php classes and methods to make your API calls
```php
Lob::addresses()->verify([
    'address_line1' => '1234 Sample Address',
    'address_line2' => '',
    'address_city' => 'San Francisco',
    'address_state' => 'CA',
    'address_zip' => '',
    'address_country' => 'US'
])
```