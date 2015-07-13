<?php
require 'vendor/autoload.php';

$validator = new EBT\Validator\Service\Validator\ValidatorService();
var_dump($validator->requiredPositiveInteger(1, 'test', 'param'));
var_dump($validator->requiredPositiveInteger(2, 'test', 'param'));
var_dump($validator->requiredPositiveInteger(0, 'test', 'param'));
var_dump($validator->requiredPositiveInteger('asd', 'test', 'param'));
var_dump($validator->requiredPositiveInteger(0, 'test', 'param', 'Exception'));
