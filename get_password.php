<?PHP
session_start(); 
include 'config.php';

$email = $_POST['email'];



$email = strip_tags($email);
$email = stripslashes($email);

if(empty($email))
{
header ("location: http://www.photocash.org/forgot_password.php");		
	
}
else
{
	





$query = "SELECT * FROM profile WHERE email = '$email'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$email2 = $row['email'];

}


if(empty($email2))
{
header ("location: http://www.photocash.org/forgot_password.php");

}
else
{


if($email == $email2)
{
	



$query = "SELECT * FROM profile WHERE email = '$email'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{


$firstname = $row['firstname'];
$lastname = $row['lastname'];
$password = $row['password'];


}




$email = $_POST['email'];

$invite = strip_tags($invite);
$headers = 'From: photocash@photocash.org' . "\r\n" .
    'Reply-To: photocash@photocash.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$subject = "".$firstname.", Here is your recovered password on photocash.org."; 
$message="".$firstname." your password is: ".$password.". Try again, click right here: http://www.photocash.org/index.php";
$send_contact=mail($email,$subject,$message,$headers);



$_SESSION['email'] = $email;
header ("location: http://www.photocash.org/email_sent.php");	
}




}
	
}





?>