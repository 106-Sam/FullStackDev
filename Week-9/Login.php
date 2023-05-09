<?php
if(isset($_POST["Submit"]))
{
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$xml=simplexml_load_file("Login.xml") or die("Error: Cannot create object");
foreach($xml->children() as $student) 
{ 
    if($student->id==$uname)
    {
        if($student->password==$pwd)
        {
            echo "<center><b>Hello..".$uname . ", "; 
            echo "Login Successful</b></center> ";
            return;
        }
        else
        {
            echo "<center><b>Invalid Password...</b></center>";
            return;
        }
   
    }
}
        echo "<center><b>Invalid Login..</b></center>";
}
?>