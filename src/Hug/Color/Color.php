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

    /**
     * Converts hexadecimal to rgb color
     *
     * @param string $hex Hexadecimal color 
     * @param string prefered returned format (array : R - G - B | string : comma separated)
     *
     * @return string|array|false $rgb rgb color equivalent to Hexadecimal in string or array format or false if invalid hexadecimal color
     *
     */
    public static function hexa_to_rgb($hex, $return = 'array')
    {
        $rgb = false;
        $hex = str_replace("#", "", $hex);
        if(Color::is_hexa_color($hex, false))
        {
            # Conversion
            if(strlen($hex) == 3)
            {
                $r = hexdec(substr($hex,0,1).substr($hex,0,1));
                $g = hexdec(substr($hex,1,1).substr($hex,1,1));
                $b = hexdec(substr($hex,2,1).substr($hex,2,1));
            }
            else
            {
                $r = hexdec(substr($hex,0,2));
                $g = hexdec(substr($hex,2,2));
                $b = hexdec(substr($hex,4,2));
            }

            # Return method
            $rgb = ["R" => $r, "G" => $g, "B" => $b];
            if($return==='string')
            {
                $rgb = implode(",", $rgb);
            }
        }

        return $rgb;
    }
}
