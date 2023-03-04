<?php

$dir = __DIR__ ;
echo is_dir($dir) ? 'dir' : 'not';
$files1 = scandir($dir);

print_r($files1);