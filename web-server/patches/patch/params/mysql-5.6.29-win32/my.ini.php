<?php

$basedir = realpath(__DIR__.'/../../../../vendor/'.basename(__DIR__));
$datadir = $basedir. DIRECTORY_SEPARATOR .'data';

return array(
	'{basedir}' => 'basedir = "'.$basedir.'"',
	'{datadir}' => 'datadir = "'.$datadir.'"',
	'{port}' => 'port = 3306',
	'{bind-address}' => 'bind-address = 127.0.0.1',
);