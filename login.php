<?php
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "select * from tbuser where email = '$Email' and password = '$Password' AND roleuser = 2 ";
	$json["hasil"]=array();
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count > 0) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>