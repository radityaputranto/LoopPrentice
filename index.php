<?php
	require_once('db/connection.php');
	require_once('libs/phpexcel/PHPExcel.php');

	if (isset($_GET['page']) && isset($_GET['action'])) {
		$controller = $_GET['page'];
		$action     = $_GET['action'];
	} else {
		$controller = 'home_prentice';
		$action     = 'index';
	}

	require_once('views/layout.php');
?>