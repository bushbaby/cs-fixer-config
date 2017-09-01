<?php

$config = new \Bsb\CS\Config();
$config->getFinder()->in(__DIR__)->exclude([]);

$cacheDir = getenv('TRAVIS') ? getenv('HOME') . '/.php-cs-fixer' : __DIR__;

$config->setCacheFile($cacheDir . '/.php_cs.cache');

return $config;
