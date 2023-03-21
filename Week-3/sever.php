<?php 
    if(isset($_POST["submit"])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $xml=simplexml_load_file("users.xml")or die("Error: cannot create object");
        foreach($xml->children() as $user){
            if($users->userid==$uname){

                if($users->password==$pass){
                    echo "<center> <b>Welcome".$uname.",";
                    echo "Login Successful </b></center>";
                    return;
                }
            }
            else{
                echo "<center> <b>Invalid Password..</b> </center>";
                return;
            }
        }
        echo "<center><b>Invalid Login</br></center>";
    }

?>