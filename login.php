<?php
//////////////////////////////////////////////////////////
//INCLUDE THIS FOR EVERY SCRIPT//
//////////////////////////////////////////////////////////
$thisUrl = $_SERVER['SCRIPT_NAME'];
$numDirectory = substr_count($thisUrl,"/")-1;
$parent = '';
for($i = 0;$i<$numDirectory;$i++) {
 $parent .= '../';
}
//////////////////////////////////////////////////////////
//END/////////////////////////////////////////////////
//////////////////////////////////////////////////////////

require $parent . 'angelhack/connect.inc.php';
require $parent . 'angelhack/logout.php';


$username = strtolower($_POST['username']);
$password = md5(strtolower($_POST['password']));

function log_in($username,$password) {
	$error = 'false';
	//prevent mysql injection	//so good so far
	if($error == 'false') {
		//log out
		// session_start();
		// session_destroy();

		$sql = 'SELECT * FROM angelhack_user WHERE username="' . $username . '" AND password="' . $password . '"';
		$result = mysql_query($sql);
		if(mysql_num_rows($result) == 1) {//if there is a match
			//check if the user submitted an email
			$row = mysql_fetch_array($result);
			session_start();
			$_SESSION['login'] = 'true';
			$_SESSION['username'] = $row['username'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			$error = 'true';
		}

		if($error == 'false') {
			$url = '/angelhack/teacher.php?id='.$_SESSION['id'];
			header('Location: ' . $url);
		} else {
			$url = '/angelhack/index.php';
			header('Location: ' . $url);
		}
	}
}

log_in($username, $password);

?>