<?php

namespace Utils;

class ConsoleRenderer {

    /**
     * @var array
     */
    private $foregroundColors = array();

    /**
     * @var array
     */
    private $backgroundColors = array();

    public function __construct() {
        $this->foregroundColors['black'] = '0;30';
        $this->foregroundColors['dark_gray'] = '1;30';
        $this->foregroundColors['blue'] = '0;34';
        $this->foregroundColors['light_blue'] = '1;34';
        $this->foregroundColors['green'] = '0;32';
        $this->foregroundColors['light_green'] = '1;32';
        $this->foregroundColors['cyan'] = '0;36';
        $this->foregroundColors['light_cyan'] = '1;36';
        $this->foregroundColors['red'] = '0;31';
        $this->foregroundColors['light_red'] = '1;31';
        $this->foregroundColors['purple'] = '0;35';
        $this->foregroundColors['light_purple'] = '1;35';
        $this->foregroundColors['brown'] = '0;33';
        $this->foregroundColors['yellow'] = '1;33';
        $this->foregroundColors['light_gray'] = '0;37';
        $this->foregroundColors['white'] = '1;37';

        $this->backgroundColors['black'] = '40';
        $this->backgroundColors['red'] = '41';
        $this->backgroundColors['green'] = '42';
        $this->backgroundColors['yellow'] = '43';
        $this->backgroundColors['blue'] = '44';
        $this->backgroundColors['magenta'] = '45';
        $this->backgroundColors['cyan'] = '46';
        $this->backgroundColors['light_gray'] = '47';
    }

    public function _echo($string, $foreground='', $background='') {
        if(empty($foreground) && empty($background)) {
            return $string . "\n";
        } else {
            return $this->colorString($string, $foreground, $background) . "\n";
        }
    }

    /**
     * @param string $string
     * @param string $foreground
     * @param string $background
     * @return string
     */
    private function colorString($string, $foreground='', $background='') {
        $coloredString = '';

        if(!empty($foreground)) {
            $coloredString .= $this->getForegroundColor($foreground);
        }

        if(!empty($background)) {
            $coloredString .= $this->getBackgroundColor($background);
        }

        $coloredString .= $string;
        $coloredString .= "\033[0m";

        return $coloredString;
    }

    private function getForegroundColor($colorName) {
        if(isset($this->foregroundColors[$colorName])) {
            return "\033[" . $this->foregroundColors[$colorName] . "m";
        }
    }

    private function getBackgroundColor($colorName) {
        if(isset($this->foregroundColors[$colorName])) {
            return "\033[" . $this->backgroundColors[$colorName] . "m";
        }
    }
}
