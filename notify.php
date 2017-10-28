<?php
require_once './vendor/autoload.php';
$token = 'wQgiGd0pn3hDggDadDv8psf55PHKsp9npVzsroghK9C';
$ln = new KS\Line\LineNotify($token);
$text = 'สวัสดี Line Notify';
$ln->send($text);