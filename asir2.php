<?php
$dns=[
	'192.168.0.67'=>'  Jose Luis',
	'192.168.0.99'=>'  Kim',
	'192.168.0.70'=>'  Kevin',

	];
$f=fopen('visitastimestamp.txt','a');
fwrite($f, date('Y-m-d H:i:s').($dns[$_SERVER['REMOTE_ADDR']]."\r\n"));
fclose($f);
?>