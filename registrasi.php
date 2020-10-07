<?php
    $noktp = $_POST['noktp'];
	$email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $roleuser = $_POST['roleuser'];
	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "INSERT INTO tbuser (noktp ,email  , password , nama , nohp , alamat , roleuser) VALUES ('$noktp', '$email', '$password', '$nama',  '$nohp' , '$alamat' ,'$roleuser')  ";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>