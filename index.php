<?php
include_once('index.html');



if(!empty($_POST["submit"])) {
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$user_message = $_POST["user_message"];

	$conn = mysql_connect("sql208.epizy.com","epiz_31548401","YoBu26xVLB");
    mysql_select_db("epiz_31548401_portfolio",$conn);
    require_once("mail.php");
	$insert_id =  mysql_query("INSERT INTO contact_me (fullname, email, user_message) VALUES ('" . $fullname. "', '" . $email. "','" . $user_message. "')");
	
	if(mysqli_query($conn, $insert_id)) {
	$message = '<div class="alert alert-success">Thank You! I will be in touch</div>';
    echo $message ;
	}
    else {
            echo "Failed to upload file.";
        }
}

// if(!empty($_POST["submit"])) {
// 	$fullname = $_POST["fullname"];
// 	$email = $_POST["email"];
// 	$user_message = $_POST["user_message"];

// 	$to = "dpabhishek007@gmail.com";
// 	$headers = "From : " . $email;
	
// 	if( mail($to, $fullname, $user_message, $headers)){
// 		echo "E-Mail Sent successfully, we will get back to you soon.";
// 	}
// }
?>