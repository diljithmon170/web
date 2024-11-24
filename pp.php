<html>
    <body>
    <?php
    // $n1,$n2;
    
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
    }
echo "hi";
$person = array("harry"=>21,"alice"=>20,"megha"=>22,"bob"=>19);
$person["megha"]=28;
print($person["megha"]);
asort($person);
print("after sort <br>");
foreach($person as $p=>$age){
    print("$p is $age <br>");
}
print($person["alice"]);
$str="malayalamm";
$rev=strrev($str);
if($str==$rev){
    print("palindrome");
}
else{
    print("not palindrome");
}
echo '
<form method="post" action="pp.php">
num1: <input type="number" name="n1">
num2: <input type="number" name="n2">
<input type="submit" value="submit">
';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
$sum=$n1+$n2;
echo $sum;
}
?>
<html>