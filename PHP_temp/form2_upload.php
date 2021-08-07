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

    // file upload  $_FILES is a superglobal that is associative so two params
    //echo $name=$_FILES["file"]['name']."<br>";//shows file name
    //echo $type=$_FILES["file"]['type']."<br>";
    //echo $temp_loc=$_FILES["file"]['tmp_name']."<br>";
    //secho $error=$_FILES["file"]['error']."<br>"; //returns 0 if no error
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
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">SUBMIT</button>
</form>
<!--enctype specified how the data must be encoded, for upload always use post -->
    
</form> 
</body>
</html>