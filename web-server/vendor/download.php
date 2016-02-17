<?php
$files = array(
	'http://dev.mysql.com/get/Downloads/MySQL-5.6/mysql-5.6.29-win32.zip' => '',
	'http://windows.php.net/downloads/releases/php-5.4.45-nts-Win32-VC9-x86.zip' => 'php-5.4.45-nts-Win32-VC9-x86',
	'http://nginx.org/download/nginx-1.7.0.zip' => '',
	'http://www.heidisql.com/downloads/releases/HeidiSQL_9.3_Portable.zip' => 'HeidiSQL_9.3_Portable',
);

foreach($files as $file=> $extract_to) {
	$file_name = basename($file);
	$file_resource = fopen($file, 'r');
	file_put_contents($file_name, $file_resource);
	fclose($file_resource);
	
	$zip = new ZipArchive;
	$extractPath = './'.$extract_to;
	if ( ! is_dir($extractPath))
		mkdir($extractPath);
	
	$zip->open($file_name);
	$zip->extractTo($extractPath);
	$zip->close();
	
	unlink($file_name);
}

