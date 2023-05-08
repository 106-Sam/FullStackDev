<?php

    $num1=$_POST['fnum'];
    $num2=$_POST['snum'];
    $op=$_POST['op'];
    if($num1=="" or $num2==""){
            echo "<script>alert('Please enter two numbers');</script>";
            echo "<style>body{background-color: rgb(15,14,14)</style>; color: rgb(0,244,0);}</style>";
    }
    else{
        
        echo "First Number : ".$num1."</br>";
        echo "Second Number : ".$num2."</br>";
        echo "Operator : ".$op."</br>";
        echo "<style>body{ background-color: rgb(15,14,14); color:rgb(0,244,0);}</style>";

        if($op == "+"){
            $res = $num1 + $num2;
            echo "<br>Addtion = ".$res;
        }
        else if($op == "-"){
            $res = $num1 - $num2;
            echo "<br>Subtration = ".$res;
        }
        else if($op == "*"){
            $res = $num1 * $num2;
            echo "<br>Multiplication = ".$res;
        }
        else if($op == "/"){
            $res = $num1 / $num2;
            echo "<br>Division = ".$res;
        }
        else if($op == "%"){
            $res = $num1 % $num2;
            echo "<br>Remainder = ".$res;
        }
    }

?>