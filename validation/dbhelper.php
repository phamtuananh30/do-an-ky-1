<?php
require_once('config.php');

function execute($sql) {
	// B1) Tao ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	// B2) Thuc hien cau insert into
	// echo $sql;
	// die();
	// insert, update, delete
	mysqli_query($conn, $sql);

	// B3) Dong ket noi
	mysqli_close($conn);
}

function executeResult($sql, $isSingle = false) {
	// B1) Tao ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');
	$data = null;

	// B2) Thuc hien cau lenh sql
	$resultset = mysqli_query($conn, $sql);
	if($resultset != null){

		if($isSingle) {
			$data = mysqli_fetch_assoc($resultset);
		} else {
			$data = [];
			while(($row = mysqli_fetch_assoc($resultset)) != null) {
				$data[] = $row; //$row -> array key & value
			}
		}
		
	}
	
	// B3) Dong ket noi
	mysqli_close($conn);

	return $data;
}