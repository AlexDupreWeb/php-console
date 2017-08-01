<?php

require_once __DIR__ . '/Utils/ConsoleRenderer.php';

use Utils\ConsoleRenderer;

$cr = new ConsoleRenderer();

echo $cr->_echo("Black background color", "white", "black");
echo $cr->_echo("Red background color", "", "red");
echo $cr->_echo("Green background color", "", "green");
echo $cr->_echo("Yellow background color", "", "yellow");
echo $cr->_echo("Blue background color", "", "blue");
echo $cr->_echo("Magenta background color", "", "magenta");
echo $cr->_echo("Cyan background color", "", "cyan");
echo $cr->_echo("Light_gray background color", "", "light_gray");

echo $cr->_echo("\n");

echo $cr->_echo("Black foreground color", "black", "");
echo $cr->_echo("Dark_gray foreground color", "dark_gray", "");
echo $cr->_echo("Blue foreground color", "blue", "");
echo $cr->_echo("Light_blue foreground color", "light_blue", "");
echo $cr->_echo("Green foreground color", "green", "");
echo $cr->_echo("Light_green foreground color", "light_green", "");
echo $cr->_echo("Cyan foreground color", "cyan", "");
echo $cr->_echo("Light_cyan foreground color", "light_cyan", "");
echo $cr->_echo("Red foreground color", "red", "");
echo $cr->_echo("Light_red foreground color", "light_red", "");
echo $cr->_echo("Purple foreground color", "purple", "");
echo $cr->_echo("Light_purple foreground color", "light_purple", "");
echo $cr->_echo("Brown foreground color", "brown", "");
echo $cr->_echo("Yellow foreground color", "yellow", "");
echo $cr->_echo("Light_gray foreground color", "light_gray", "");
echo $cr->_echo("White foreground color", "white", "");
