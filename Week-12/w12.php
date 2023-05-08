<?php
    setcookie("Name","Abdul Sami");
    setcookie("Age","21");
    setcookie("Address","HYD");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BROWSER COOKIES</title>
    <style>
        body{
            background-color: rgb(15,14,14);
            color: rgb(0,244,0);
        }
        h2{
            text-align: center;
        }
        form{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>List Cookies</h2>
    <br><br>
    <form action="cookies.php" method="post">
        <input type="submit" value="List Cookies" name="listcookies">
    </form>
</body>
</html>