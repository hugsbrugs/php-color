<?php

namespace Hug\Color;

/**
 *
 */
class Color
{
    /**
     * Tests if a string is a valid hexadecimal color with optionnal hash
     * 
     * @param string $color Color to test
     * @param bool $with_hash Test color with leading hash (#)
     * @return bool $is_hexa 
     * @link http://code.hyperspatial.com/250/verify-hex-color-string/
     */
    public static function is_hexa_color($color, $with_hash = true)
    {
        $is_hexa = false;
        if($with_hash)
        {
            # Check for a hex color string '#c1c2b4'
            //if(preg_match('/^#[a-f0-9]{6}$/i', $color))
            if(preg_match('/^#([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?\b/i', $color))
            {
                # Verified hex color
                $is_hexa = true;
            } 
        }
        else
        {
            # Check for a hex color string without hash 'c1c2b4'
            //if(preg_match('/^[a-f0-9]{6}$/i', $color))
            if(preg_match('/^([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?\b/i', $color))
            {
                # Verified hex color
                $is_hexa = true;
            }
        }
        return $is_hexa;
    }
}
