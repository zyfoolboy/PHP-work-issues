<?php

require 'Adaptee.php';
require 'Adapter.php';

$adaptee = new Adaptee();
$target = new Adapter($adaptee);
$target->request();