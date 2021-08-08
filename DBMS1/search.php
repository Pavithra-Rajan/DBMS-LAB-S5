<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <form action="search.php" method="post">
        <input type="text" placeholder="Roll Number" name="search">
        <button type="submit" name="submit">Search</button>
    </form>
</body>

</html>
<?php


if (isset($_POST['submit'])) {
    $searchValue = strtoupper($_POST['search']);
    $con = mysqli_connect("localhost", "root", "", "student");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM cvdetails WHERE roll_number='$searchValue'";

        $result = $con->query($sql);
        $flag=0;
        while ($row = $result->fetch_assoc()) {
            
            echo "Name : ". $row['name'] . "<br>";
            echo "Roll Number : ". $row['roll_number'] . "<br>";
            echo "Date of Birth : ". $row['dob'] . "<br>";
            echo "Address : ". $row['address'] . "<br>";
            echo "Mobile Number : ". $row['mob_no'] . "<br>";
            echo "Email ID : ".$row['email_id'] . "<br>";
            if($row['SGPA1']!=0)
            {
                echo "SGPA 1: ".$row['SGPA1']."<br>";
            }
            if($row['SGPA2']!=0)
            {
                echo "SGPA 2: ".$row['SGPA2']."<br>";
            }
            if($row['SGPA3']!=0)
            {
                echo "SGPA 3: ".$row['SGPA3']."<br>";
            }
            if($row['SGPA4']!=0)
            {
                echo "SGPA 4: ".$row['SGPA4']."<br>";
            }
            if($row['SGPA5']!=0)
            {
                echo "SGPA 5: ".$row['SGPA5']."<br>";
            }
            if($row['SGPA6']!=0)
            {
                echo "SGPA 6: ".$row['SGPA6']."<br>";
            }
            if($row['SGPA7']!=0)
            {
                echo "SGPA 7: ".$row['SGPA7']."<br>";
            }
            if($row['SGPA8']!=0)
            {
                echo "SGPA 8: ".$row['SGPA8']."<br>";
            }
            if($row['CGPA']!=0)
            {
                echo "CGPA: ".$row['CGPA']."<br>";
            }
            echo "Hobbies: ".$row['hobbies']."<br>";
            if($row['hosteller']=='Y')
            {
                echo "Hosteller <br>";
            }
            else
            {
                echo "Day-Scholar <br>";
            }
            echo "Reference: ".$row['ref']."<br>";
            $flag=1;
            
        }
        if($flag===0)
        {
            echo "Invalid Roll Number. Try Again <br>";
        }

      
    }   
}



?>