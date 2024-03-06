# Contact Us Form Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/akramghaleb/contact.svg?style=flat-square)](https://packagist.org/packages/akramghaleb/contact)
[![Total Downloads](https://img.shields.io/packagist/dt/akramghaleb/contact.svg?style=flat-square)](https://packagist.org/packages/akramghaleb/contact)

This will send email to admin and save contact data in the database

## Installation

You can install the package via composer:

```bash
composer require akramghaleb/contact
```

And add the service provider in config/app.php:

```php
AkramGhaleb\Contact\ContactServiceProvider::class,
```

Publish config:

```
php artisan vendor:publish --tag=contact-config
```

Now go to /contact route
