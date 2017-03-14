# php-color

This library provides utilities function to ease color manipulation

[![Build Status](https://travis-ci.org/hugsbrugs/php-color.svg?branch=master)](https://travis-ci.org/hugsbrugs/php-color)
[![Coverage Status](https://coveralls.io/repos/github/hugsbrugs/php-color/badge.svg?branch=master)](https://coveralls.io/github/hugsbrugs/php-color?branch=master)

## Install

Install package with composer
```
composer require hugsbrugs/php-color
```

In your PHP code, load library
```php
require_once __DIR__ . '/../vendor/autoload.php';
use Hug\color\color as color;
```

Test a color is hexadecimal
```php
color:: is_hexa_color($color, $with_hash = true);
```

Example
```php
var_dump(Color::is_hexa_color('#fff'));
(bool)true
var_dump(Color::is_hexa_color('#fff555'));
(bool)true
var_dump(Color::is_hexa_color('frfrfr', false));
(bool)false
```

## Unit Tests

```
composer exec phpunit
```