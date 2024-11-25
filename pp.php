<?php
    // $n1,$n2;

    //find the sum from the form
    if (isset($_POST["submit"])){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $sum=$n1+$n2;
    echo "sum= ".$sum."<br>";
    }
echo "hi";

//create array with key and value

$person = array("harry"=>21,"alice"=>20,"megha"=>22,"bob"=>19);

//update key value of megha
$person["megha"]=28;
//print update value key
print($person["megha"]);
//sort by key value
asort($person);
//print the values
print("after sort <br>");
foreach($person as $p=>$age){
    print("$p is $age <br>");
}
print($person["alice"]);

//palindrome 
$str="malayalamm";
// reverse check
$rev=strrev($str);
if($str==$rev){
    print("palindrome");
}
else{
    print("not palindrome");
}

echo "sum= ".$sum."<br>";
?>
<html>
<body>


<form method="post" action="pp.php">
num1: <input type="number" name="n1">
num2: <input type="number" name="n2">
<input type="submit" value="submit" name="submit">
</body>
<html>