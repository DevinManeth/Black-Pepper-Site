<?php
	$pepper = $_POST['colour'];
	$weight = $_POST['weight'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	
	$conn = new mysqli('localhost','root','','peppersite');
	if($conn->connect_error){
		die('connection failed'.$conn->connect_error);
	}
	else{
 		$stmt=$conn->prepare("insert into details(pepper,weight,fname,lname,address,email,whatsappNo)
			values(?,?,?,?,?,?,?)");

	$stmt->bind_param("ssssssi", $pepper, $weight, $firstname, $lastname, $address, $email, $number);

	$stmt->execute();
	echo "order confirmed!";

	$stmt->close();
	$conn->close();
	}	
	
?>