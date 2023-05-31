<?PHP
include 'config.php';
session_start();

///////////////////////////////////////////////////////////////////////
date_default_timezone_set('America/Kentucky/Monticello');


$month = $_SESSION['month'];
$month = stripslashes($month);
$month = strip_tags($month);
$day = $_SESSION['day'];
$day = stripslashes($day);
$day = strip_tags($day);
$year = $_SESSION['year'];
$year = stripslashes($year);
$year = strip_tags($year);
$sex = $_SESSION['sex'];
$sex = stripslashes($sex);
$sex = strip_tags($sex);
$email = $_SESSION['email'];
$email = stripslashes($email);
$email = strip_tags($email);
$password = $_SESSION['password'];
$password = stripslashes($password);
$password = strip_tags($password);
$firstname = $_SESSION['firstname'];
$firstname = stripslashes($firstname);
$firstname = strip_tags($firstname);
$lastname = $_SESSION['lastname'];
$lastname = stripslashes($lastname);
$lastname = strip_tags($lastname);
$zipcode = $_SESSION['zipcode'];
$zipcode = stripslashes($zipcode);
$zipcode = strip_tags($zipcode);
$title = $_POST['title'];
$title = stripslashes($title);
$title = strip_tags($title);

$description = $_POST['description'];
$description = stripslashes($description);
$description = strip_tags($description);

$webaddress = $_POST['webaddress'];
$webaddress = stripslashes($webaddress);
$webaddress = strip_tags($webaddress);
//////////////////////////////////////////////////////////



$query = "SELECT * FROM profile WHERE email = '$email'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$email2 = $row['email']; 		
}

if($email == $email2)
{
header ("location: http://www.photocash.org/index.php");	
}


else
{


if(!empty($email))
{

if(!empty($password))
{

if(!empty($firstname))
{

if(!empty($lastname))
{

if($sex != "Select Sex")
{

if($month != "Month")
{

if($day != "Day")
{

if($year != "Year")
{






///////////////////////////////////////////////////////////


$id = abs(rand(111111111111, 999999999999999));
$time = date("Y-m-d H:i:s");



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$signquery4 = "CREATE TABLE IF NOT EXISTS profile(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(100), firstname VARCHAR(100), lastname VARCHAR(100), email VARCHAR(350), password VARCHAR(30), month VARCHAR(10), day VARCHAR(10), year VARCHAR(100), sex VARCHAR(50), phone VARCHAR(300), photo VARCHAR(500), views VARCHAR(500), interactions VARCHAR(500), location VARCHAR(500), type VARCHAR(500), doctor VARCHAR(500), nurse VARCHAR(500), other VARCHAR(500), time TIMESTAMP)";

$signquery = mysql_query($signquery4)
or die("Query failed:Pow, It failed!-------------1".mysql_error());



$signup = "INSERT INTO profile(id, user_id, firstname, lastname, email, password, month, day, year, sex, phone, photo, views, interactions, location, type, doctor, nurse, other, time) VALUES (NULL, '$id', '$firstname', '$lastname', '$email', '$password', '$month', '$day', '$year', '$sex', '', '$f', '$person', 'Single', '$location', '', '', '', '$zipcode', '$time')";  mysql_query($signup) or die('Error, insert query failed, oh shoot, it failed.---------------2a');




$signquery4 = "CREATE TABLE IF NOT EXISTS company(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(100), firstname VARCHAR(100), lastname VARCHAR(100), email VARCHAR(350), password VARCHAR(30), month VARCHAR(10), day VARCHAR(10), year VARCHAR(100), sex VARCHAR(50), phone VARCHAR(300), photo VARCHAR(500), views VARCHAR(500), interactions VARCHAR(500), location VARCHAR(500), title VARCHAR(500), description VARCHAR(500), webaddress VARCHAR(500), other VARCHAR(500), time TIMESTAMP)";

$signquery = mysql_query($signquery4)
or die("Query failed:Pow, It failed!-------------1".mysql_error());



$signup = "INSERT INTO company(id, user_id, firstname, lastname, email, password, month, day, year, sex, phone, photo, views, interactions, location, title, description, webaddress, other, time) VALUES (NULL, '$id', '$firstname', '$lastname', '$email', '$password', '$month', '$day', '$year', '$sex', '', '$f', '$person', 'Single', '$location', '$title', '$description', '$webaddress', '$zipcode', '$time')";  mysql_query($signup) or die('Error, insert query failed, oh shoot, it failed.---------------2a');




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$headers = 'From: Photocash@photocash.org' . "\r\n" .
    'Reply-To: Photocash@photocash.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$subject = "".$firstname.", Thanks for joining Photocash. You mean a lot to us. We are new and you are to, so we are working hard to bring the lastest and greatest of this technology that we have stumbled upon. So, stay tuned, more is to come."; 
$message="".$firstname.", You are number one to us. We value your comments and suggestions in this new website. We are working on Photocash everyday to improve the user experience for you so that is it for now. Hope to see you soon. :)";
$to = $email;
$send_contact=mail($to,$subject,$message,$headers);


$subject = "".$firstname.", (New user) Thanks for joining Photocash."; 
$to = "genghiskhan43@mail.com";
$message= "New user, you are gaining users!!!!!!";
$send_contact=mail($to,$subject,$message,$headers);




$_SESSION['id'] = $id;
$extra = "home.php?id=".$id;
header("Location: http://www.photocash.org/$extra");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
else
{

header("Location: http://www.photocash.org/index.php");
	
}

}
else
{

header("Location: http://www.photocash.org/index.php");
	
}


}
else
{

header("Location: http://www.photocash.org/index.php");
	
}

}
else
{

header("Location: http://www.photocash.org/index.php");
	
}

}
else
{

header("Location: http://www.photocash.org/index.php");
	
}

}
else
{

header("Location: http://www.photocash.org/index.php");
	
}

}
else
{

header("Location: http://www.photocash.org/index.php");
	
}



}
else
{

header("Location: http://www.photocash.org/index.php");
	
}









}

?>