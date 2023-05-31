<?PHP
session_start();

$_SESSION['zipcode'] = $_POST['zipcode'];
$_SESSION['month'] = $_POST['month'];
$_SESSION['day'] = $_POST['day'];
$_SESSION['year'] = $_POST['year'];
$_SESSION['sex'] = $_POST['sex'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['lastname'] = $_POST['lastname'];



if(!empty($_POST['email']))
{

if(!empty($_POST['password']))
{

if(!empty($_POST['firstname']))
{

if(!empty($_POST['lastname']))
{

if($_POST['sex'] != "Select Sex")
{

if($_POST['month'] != "Month")
{

if($_POST['day'] != "Day")
{

if($_POST['year'] != "Year")
{

header("Location: http://www.photocash.org/setup-1.php");


}}}}}}}}
else
{
header("Location: http://www.photocash.org/index.php");	
}



?>