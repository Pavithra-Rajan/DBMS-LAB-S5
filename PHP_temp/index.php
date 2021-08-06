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
    $name="Pavi";
    echo "Hello World $name<br>"; 
    // echo 'Hello {$name}'; will print the brackets but if double quotes used then no issues
    //{} for separating the variable
    // echo "Hello","World";
    //print you can use only one string
    // print "Hello", "World"; throws error but use . instead of ,
    echo "Line1 <br>";
    echo "Line2 <br>";
    echo "Line3 <br>";
    // $x=null and if echo then nothing  happens


    //Arrays
    $arr=array("temp1","temp2","temp3");
    var_dump($arr);
    //indicates the size of array along with contents and data type
    echo "<br>";
    print_r($arr);
    // index with content printed

    //merge two arrays
    echo "<br>";
    $arr1=array("1","2","3");
    $arr2=array("4","5","6");
    $arr1=array_merge($arr1,$arr2);
    print_r($arr1);
    echo "<br>";

    // associative arrays -dictionaries
    $temp=array("one"=>1,"two"=>2,"three"=>3);
    foreach($temp as $k=>$v)
    {
        echo "This ". $k . " is " . $v . "<br>";
    }
    echo "<br>";
    

    // Multi-dimensional array
    $multi=array("Row1"=>array(1,2,3),
                "Row2"=>array(4,5,6));
    echo $multi["Row1"][2]; //prints 3
    echo "<br>";
    

    // number format
    $a=5;
    $b=10;
    $avg=($a+$b)/2;
    echo "Average is ". $avg;
    echo "<br>";
    // capital and country print
    $cap=array("India"=>"New Delhi","UAE"=>"Abu Dhabi","USA"=>"Washington");
    foreach($cap as $k=>$v)
    {
        echo "The capital of ".$k. " is ".$v."<br>";
    }
    // concatenate operator .
    $a=9;
    $b=8;
    echo $a.$b. "<br>";//prints 98   $a.=9 will echo 99
    if ($a===$b)  
    {
        echo "if executed <br>";
    }
    else{
        echo "else executed <br>";
    }
    // === check identical, the value and type
    // "22"==22 will be true because it doesnt check the type
    //<> less than or greater tha equivalent to not equal
    //spaceship <=> if left <right then return -1, both equal return 0 else left >right return 1
    //pre and post increment like c++
    $x=null;
    echo ++$x,"<br>";//will print 1
    //switch
    //while, for, do while, foreach loops

    function fun()
    {
        echo "Inside function<br>";
    }
    fun();
    // reference parameter with &

    //first argument must be in caps separated with underscore
    //2nd argument is the constant value
    // for echo no need for the $sign as that is used for variables
    define("CONST_NAME","constant");
    echo CONST_NAME."<br>";
    const my_name="Pavi";
    echo my_name."<br>";
    // include just shows error but remaining is run 
    //but if require then script will stop
    /*
    <?php
    include 'path of file'; 
    ?>
    include_once and require_once to prevent multiple declaration of file incase of many functions

    */
    //round(value,precission val)
    //string functions
    $string="This is a string";
    echo strlen($string)."<br>";
    echo str_word_count($string)."<br>";
    $email="pavithra.rajan01@gmail.com";
    if (strpos($email,"@"))
    {
        echo "This is a valid email address<br>";
    }
    else
    {
        echo "This isn't a valid email address<br>";
    }
    echo ucwords($string)."<br>";//first letter to upper case
    //strtoupper strtolower all characters

    //array inbuilt functions
    print_r(array_keys($cap));//must use with print_r not with echo, prints keys for values use array_values()
    echo "<br>";
    $new_arr=array("1","2","3");
    array_push($new_arr,"4");
    print_r($new_arr);
    echo "<br>";
    // <br> with print_r doesnt work

    echo array_search("3",$new_arr)."<br>"; //return index of the element
    //date
    date_default_timezone_set('Asia/Dubai');
    echo date("d/m/Y")."<br>"; //current date take one parameter
    // d,j,l,D,m,n,M,F,y,Y separate with slash

    //times
    // g h G H a A i s
    echo date("H:i:s")."<br>";
    // random
    echo rand(1,10)."<br>";//random number bw 1 and 10


    // superglobals
    // $_POST collect data from HTML file
    // $_GET
    // $_SERVER
    // $_COOKIE
    // $_SESSION
    // $_FILES
    $a1=10;
    $a2=15;
    function add()
    {
        $GLOBALS['a3']=$GLOBALS['a1']+$GLOBALS['a2'];
    }
    add();
    echo $a3;
?>
</body>
</html>