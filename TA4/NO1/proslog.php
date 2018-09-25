<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start();

	$_SESSION['id'] = isset($_POST['id'])?$_POST["id"]: $_SESSION["id"];
	$_SESSION['pass'] = isset($_POST['pass'])?$_POST["pass"]: $_SESSION["pass"];

	$data = array(
				array(
						"id" => "rap",
						"pass" => "rap"
						),
				array(
						"id" => "rap123",
						"pass" => "rap123"
						),
				array(
						"id" => "par123",
						"pass" => "par123"
						)
					);
	if ($_POST['id'] == $data[0]["id"] && $_POST ['pass'] == $data[0]['pass'] || 
		$_POST['id'] == $data[1]["id"] && $_POST ['pass'] == $data[1]['pass'] ||
		$_POST['id'] == $data[2]["id"] && $_POST ['pass'] == $data[2]['pass']) {
		header("location: form.html");
	}else{
		header("location: login.html");
	 }
	 ?>
</body>
</html>