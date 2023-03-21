<?php
$str="";
$lines=$words=1;
$c=0;
if(isset($_POST['area']))
    $str=$_POST['area'];
    $len=strlen($str);
    echo "length of given text".$len."<br>";
    $for($i=0;$i<$len;$i++){
        if(strstr($str[$i],"\n")){
            $lines++;
            $words++;
            $c--;
        }
        else if(strstr($str[$i],""))
            $words++;
        else
            $c++;
    }
    echo "lines <script> alert($lines);</script>";
    echo "words <script> alert($words);</script>";
    echo "chars excluding spaces and newlines <script>alert($c);</script>";
?>
