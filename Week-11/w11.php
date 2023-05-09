<?php
$name=$_REQUEST['username'];
$pass=$_REQUEST['password'];
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'mlr';
 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());}
 $sql = 'SELECT username, password FROM user_detail';
 mysql_select_db('user_login');
 $retval = mysql_query( $sql, $conn );
if(! $retval ) {
die('Could not get data: ' . mysql_error());
 }
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
if($name==$row['username'] && $pass==$row['password']){
echo("login sucesses");
return true;
}
else{
echo("invalid username and paasword ");
return false;
}}
?>
