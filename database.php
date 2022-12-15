<?php
$con= new mysqli('localhost','root','','livecan')or die("Could not connect to mysql".mysqli_error($con));

?>

<?php 
/* 
 * PayPal and database configuration 
 */ 
  
// PayPal configuration 
define('PAYPAL_ID', 'amaljose5991@gmail.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://localhost/LiveCAN/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/LiveCAN/success.php'); 
define('PAYPAL_NOTIFY_URL', 'http://localhost/LiveCAN/success.php'); 
define('PAYPAL_CURRENCY', 'CAD'); 
 
// Database configuration 
define('DB_HOST', 'MySQL_Database_Host'); 
define('DB_USERNAME', 'MySQL_Database_Username'); 
define('DB_PASSWORD', 'MySQL_Database_Password'); 
define('DB_NAME', 'MySQL_Database_Name'); 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");

?>