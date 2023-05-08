<?php

    $cookies = $_COOKIE;
    foreach($cookies as $key=>$val){
        echo "<br>".$key.":".$val;
    }

?>