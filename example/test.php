<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hug\Color\Color as Color;

var_dump(Color::is_hexa_color('#fff'));
var_dump(Color::is_hexa_color('#fff555'));
var_dump(Color::is_hexa_color('frfrfr', false));
