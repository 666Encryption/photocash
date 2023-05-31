<?PHP
session_start();
session_destroy();
header ("location: http://www.photocash.org/index.php");
?>