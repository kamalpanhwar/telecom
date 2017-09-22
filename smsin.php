
<?php
$servername = "127.0.0.1"; // Change your own host of database
$username = "root"; // change your own root user of database
$password = "1"; // change your password of database
$dbname = "learn"; // name of your database

// Please make sure you create table SMSInbox in your database for which you provided credentials above



$to	    = $_REQUEST['to'];
$from	= $_REQUEST['from'];
$text	= $_REQUEST['text'];
$Ident	= $_REQUEST['ident'];
$SMSRates = 1;
$current_date = date('m/d/Y h:i:s a', time());

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$stmt = $conn->prepare("insert into SMSInbox(DID,FromNumber,MSg,Date,OID,Ident,Rate) value (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param('sssisii',$to, $from, $text, $current_date,$OID,  $Ident, $SMSRates );

$stmt->execute();

echo "new record created successfully";

$stmt->close();
$conn->close();


?>
