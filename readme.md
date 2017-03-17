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
use Hug\Color\Color as Color;
```

Test a color is hexadecimal
```php
Color:: is_hexa_color($color, $with_hash = true);
```

Examples
```php
var_dump(Color::is_hexa_color('#fff'));
(bool)true
var_dump(Color::is_hexa_color('#fff555'));
(bool)true
var_dump(Color::is_hexa_color('frfrfr', false));
(bool)false
```

Convert hexadecimal color to RGB
```php
Color:: hexa_to_rgb($hex, $return = 'array');
```
Examples
```php
var_dump(Color::hexa_to_rgb('#fff'));
array(3) {
  'R' => int(255)
  'G' => int(255)
  'B' => int(255)
}

var_dump(Color::hexa_to_rgb('#fff555'));
array(3) {
  'R' => int(255)
  'G' => int(245)
  'B' => int(85)
}

var_dump(Color::hexa_to_rgb('frfrfr', 'string'));
(bool)false
```


## Unit Tests

```
composer exec phpunit
```

## Author

Hugo Maugey [visit my website ;)](https://hugo.maugey.fr)