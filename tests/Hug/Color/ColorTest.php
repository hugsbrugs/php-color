<?php

# For PHP7
// declare(strict_types=1);

// namespace Hug\Tests\Color;

use PHPUnit\Framework\TestCase;

use Hug\Color\Color as Color;

/**
 *
 */
final class ColorTest extends TestCase
{

    /* ************************************************* */
    /* ************** Color::is_hexa_color ************* */
    /* ************************************************* */

    /**
     *
     */
    public function testCanTestHexaColor()
    {
        $valid_colors_with_hash = ['#fff', '#cdcdcd', '#123abc'];
        $valid_colors_without_hash = ['fff', 'cdcdcd', '123abc'];

        $invalid_colors_with_hash = ['#fgh', '#fr1234', '#cdcdcdd'];
        $invalid_colors_without_hash = ['fgh', 'fr1234', 'cdcdcdd'];

        #
        foreach ($valid_colors_with_hash as $key => $color) {
            $test = Color::is_hexa_color($color, $with_hash = true);
            $this->assertTrue($test);
        }

        #
        foreach ($valid_colors_without_hash as $key => $color) {
            $test = Color::is_hexa_color($color, $with_hash = false);
            $this->assertTrue($test);
        }

        #
        foreach ($invalid_colors_with_hash as $key => $color) {
            $test = Color::is_hexa_color($color, $with_hash = true);
            $this->assertFalse($test);
        }

        #
        foreach ($invalid_colors_without_hash as $key => $color) {
            $test = Color::is_hexa_color($color, $with_hash = false);
            $this->assertFalse($test);
        }

    }

    /* ************************************************* */
    /* *************** Color::hexa_to_rgb ************** */
    /* ************************************************* */

    /**
     *
     */
    public function testCanTestHexaToRgb()
    {
        $valid_colors_with_hash = ['#fff', '#cdcdcd', '#123abc'];
        $valid_colors_without_hash = ['fff', 'cdcdcd', '123abc'];

        $invalid_colors_with_hash = ['#fgh', '#fr1234', '#cdcdcdd'];
        $invalid_colors_without_hash = ['fgh', 'fr1234', 'cdcdcdd'];

        #
        foreach ($valid_colors_with_hash as $key => $color) {
            $test = Color::hexa_to_rgb($color);
            $this->assertInternalType('array', $test);
            $this->assertArrayHasKey('R', $test);
            $this->assertArrayHasKey('G', $test);
            $this->assertArrayHasKey('B', $test);
        }

        #
        foreach ($valid_colors_without_hash as $key => $color) {
            $test = Color::hexa_to_rgb($color);
            $this->assertInternalType('array', $test);
            $this->assertArrayHasKey('R', $test);
            $this->assertArrayHasKey('G', $test);
            $this->assertArrayHasKey('B', $test);
        }

        #
        foreach ($invalid_colors_with_hash as $key => $color) {
            $test = Color::hexa_to_rgb($color, $with_hash = 'string');
            $this->assertFalse($test);
        }

        #
        foreach ($invalid_colors_without_hash as $key => $color) {
            $test = Color::hexa_to_rgb($color, $with_hash = 'string');
            $this->assertFalse($test);
        }

    }

}

