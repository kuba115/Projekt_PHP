<?php
/*--------------------------------------------
----------------------------------------------
-----koniguracja połączenia z serwerem--------
----------------------------------------------
--------------------------------------------*/


// nazwa servera
$mysql_server = "localhost";

// nazwa bazy danych
$mysql_database ="projekt_php";

// nick użytkownika z prawami administratora
$mysql_admin ="kuba115";

// hasło użytkownika
$mysql_password ="LWXr0U8yYCTAYx0k";

$link = mysqli_connect(
	$mysql_server,
	$mysql_admin,
	$mysql_password,
	$mysql_database);

if ($link === false) {
	die("Błąd bazy danych" . mysqli_connect_error());
}

?>