<?php
require_once __DIR__ . '/vendor/autoload.php';
use Lib\OpeningHours\OpeningHours;

$openingHours = OpeningHours::setData([
            "Mo,Tu,We,Th 12:00-19:00",
            "Sa ",
            "Su "
        ], 'fr');
var_dump($openingHours->getAllDayHtml(), 'fr');
die('ici');