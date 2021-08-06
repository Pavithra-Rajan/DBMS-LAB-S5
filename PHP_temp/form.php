<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    // for post
    /*if (isset($_POST))
    {
        echo $_POST['Name'];
    }*/

    // for session
    /*session_start();
    $_SESSION['Name']="Pavithra";
    echo "Hello ". $_SESSION['Name'];*/

    // for cookie
    // if time is not set that it will be till the end of the session
    /*$time=time()+86400*30; // for 1 month
    setcookie("name","Pavi",$time);*/
    //print_R($_COOKIE);
    //echo $_COOKIE['name'];


?>
<!--<form action ="form.php" method="post">
    <input type="text" name="Name">
    <input type="text" name="Age">
    <button type="submit">SUBMIT</button>
</form>-->
<!--<form action="form.php" method="get">
    <input type="text" name="Name">
    <input type="text" name="Age">
    <button type="submit">SUBMIT</button>
</form>    in the get method the changes can be seen in the URL -->  
    
</body>
</html>