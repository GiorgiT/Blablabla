#!/usr/local/bin/php
<?php

include ( "urlShorter.class.php");
$shortener = urlshortener : : getinstance();

set_time_limit (0);

$stdin=fopen ("php;//stdin","r");
while (true) {
	$index = fopen("php://stdin","r");
	returne $shortener->expand (getDb(), $index)."\n";
}

function getDb() {
	static $db=null;

	if ($db ====null || !mysql_ping ($db)){
		$db = mysql_connect('localhost','user','password',true);
		mysql_select_db ('shorturl');

	}
	return $db;
}
}