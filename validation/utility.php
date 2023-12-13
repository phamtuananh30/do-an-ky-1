<?php
// Viet cau truy van theo cau truc: $sql = "???";
function getPost($key) {
	$value = '';

	if(isset($_POST[$key])) {
		$value = $_POST[$key];
		$value = str_replace("'", "\\'", $value);
	}

	return $value;
}

// Viet cau truy van theo cau truc: $sql = "???";
function getGet($key) {
	$value = '';

	if(isset($_GET[$key])) {
		$value = $_GET[$key];
		$value = str_replace("'", "\\'", $value);
	}

	return $value;
}


function getMD5Security($pwd) {
	return md5(md5($pwd).'jhgJHGsdy^&%723GJ67532GHFd');
}

function getTimeFormat($str) {
	$mydate = new DateTime($str);
	return $mydate->format('H:i d/m/Y');
}

function checkLogin() {
	if(isset($_SESSION['cUser'])) {
		//Session ton tai
		return true;
	}
	if(isset($_COOKIE['token'])) {
		$token = $_COOKIE['token'];

		$sql = "select * from users where token = '$token'";
		$data = executeResult($sql, true);

		if($data != null) {
			$_SESSION['cUser'] = $data;
			return true;
		}
	}

	return false;
}