<?php
	function conectar()
	{
    $dbh = new PDO("mysql:host=localhost;dbname=mau", 'root', 'wfl766');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
	}
?>