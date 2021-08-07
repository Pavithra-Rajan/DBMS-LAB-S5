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
        $name=$_POST['name'];
        $roll_number=$_POST['roll'];
        $dob=$_POST['dob'];
        $address=$_POST['address'];
        $mob_no=$_POST['mob'];
        $email_id=$_POST['email'];
        $SGPA1=$_POST['sgpa1'];
        $SGPA2=$_POST['sgpa2'];
        $SGPA3=$_POST['sgpa3'];
        $SGPA4=$_POST['sgpa4'];
        $SGPA5=$_POST['sgpa5'];
        $SGPA6=$_POST['sgpa6'];
        $SGPA7=$_POST['sgpa7'];
        $SGPA8=$_POST['sgpa8'];
        $CGPA=$_POST['cgpa'];
        $hobbies=$_POST['hobbies'];
        $hosteller=$_POST['hosteller'];
        $ref=$_POST['ref'];

        //echo $dob;
        $date=explode("-",$dob);
        $year=$date[0];
        echo $year;
        $year=(int)$year;
        if ($year>1995 && $year<2004)
        {
            echo "Valid age<br>";
        }
        else
        {
            header("Location: details.html?notvalidage");
        }
        

        if(empty($name) || empty($roll_number) || empty($dob) || empty($address) || empty($mob_no) ||
        empty($email_id)|| empty($CGPA) || empty($hobbies) || empty($hosteller) || empty($ref))
        {
                echo "Some field is missing.";
                die();
        }
        else
        {
            $dbHost="localhost";
            $dbUser="root";
            $dbPass="";
            $dbName="student";
            $conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

            if (mysqli_connect_error())
            {
                echo "Cannot connect<br>";
            }
            else
            {
                $select="select roll_number from cvdetails where roll_number= ? limit 1";
                $ins="insert into cvdetails (name,roll_number,dob,address,mob_no,email_id,SGPA1,SGPA2,SGPA3,SGPA4,SGPA5,SGPA6,SGPA7,SGPA8,CGPA,hobbies,hosteller,ref) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $state=$conn->prepare($select);
                $state->bind_param("s",$roll_number);
                $state->execute();
                $state->bind_result($roll_number);
                $state->store_result();
                $num_row=$state->num_rows();
                if ($num_row===0)
                {
                    $state->close();
                    $state=$conn->prepare($ins);
                    $state->bind_param("ssssisdddddddddsss",$name,$roll_number,$dob,$address,$mob_no,$email_id,$SGPA1,$SGPA2,$SGPA3,$SGPA4,$SGPA5,$SGPA6,$SGPA7,$SGPA8,$CGPA,$hobbies,$hosteller,$ref);
                    $state->execute();
                    echo "Details have been inserted to table<br>";
                    if (isset($_POST['submit']))
                        {
                            $myFile=fopen("file.txt","a");
                            $txt=$_POST['name']." ".$_POST['roll']." ". $_POST['dob']." ". $_POST['address']." ". $_POST['mob']." ". $_POST['email']." ". 
                            $_POST['cgpa']." ". $_POST['hobbies']." ". $_POST['hosteller']." ". $_POST['ref']." "."\n";
                            fwrite($myFile,$txt);
                            fclose($myFile);
                        }
                    echo "Details have been inserted to the file<br>";
                    
                }
                else
                {
                    echo "This roll number already exists!";
                }
                $state->close();
                $conn->close();
            }
        }
    ?>

    
</body>
</html>
