<?php

require 'AbstractFactory.php';
require 'HtmlFactory.php';
require 'JsonFactory.php';
require 'HtmlText.php';
require 'JsonText.php';

$html = new HtmlFactory();
$text1 = $html->createText('foobar');
$text1->say();

$json = new JsonFactory();
$text2 = $json->createText('json');
$text2->say();
//
//require 'Factory.php';
//require 'TV.php';
//require 'PC.php';
//require 'AppleTV.php';
//require 'MacBook.php';
//require 'ProductFactory.php';
//
//$apple = ProductFactory::createTV();
//$apple->open();
//$apple->watch();
//
//$mac = ProductFactory::createPC();
//$mac->play();
//$mac->work();
