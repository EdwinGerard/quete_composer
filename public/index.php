<?php
/**
 * Created by PhpStorm.
 * User: aragorn
 * Date: 04/04/18
 * Time: 11:57
 */

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();

echo $hello->talk();

$helloWorld = new SayHello();

echo $helloWorld->world();