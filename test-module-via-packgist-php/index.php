<?php

require __DIR__ . '/vendor/autoload.php';

use YourVendor\MyPackage\MyPackage;

$pkg = new MyPackage();
echo $pkg->hello() . "sasa";
