<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hug\Color\Color as Color;

/* ************************************************* */
/* ************** Color::is_hexa_color ************* */
/* ************************************************* */

var_dump(Color::is_hexa_color('#fff'));
var_dump(Color::is_hexa_color('#fff555'));
var_dump(Color::is_hexa_color('frfrfr', false));

/* ************************************************* */
/* *************** Color::hexa_to_rgb ************** */
/* ************************************************* */

var_dump(Color::hexa_to_rgb('#fff'));
var_dump(Color::hexa_to_rgb('#fff555'));
var_dump(Color::hexa_to_rgb('frfrfr', 'string'));
