<?php
// take the values from the form
if (isset($_POST["submit"])){
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $op=$_POST["submit"];
    $res="";
}
//set empty values
else{$n1=""; $n2=""; $res="";}
if(is_numeric($n1) and is_numeric($n2)){
    switch($op){
        case 'Add':
            $res=$n1+$n2;
            break;
        case 'Sub':
            $res=$n1-$n2;
            break;
        case 'Mul':
            $res=$n1*$n2;
            break;
        case 'div':
            $res=$n1/$n2;
            break;
        default:
            echo "enter the digit";
    }
}
function hel()
{
    echo "hello";
}
hel();
?>
<html>
    <head>
</head>
<body>
<form method="post" action="pp4.php">
    <p>First number : <input type="number" name="num1" value="<?php echo $n1;?>"></p>

    <p>2nd Number : <input type="number" name="num2" value="<?php echo $n2;?>"></p>

    <p>REsult : <input type="text" name="res" value="<?php echo $res;?>"></p>

    <input type="submit" name="submit" value="Add">
    <input type="submit" name="submit" value="Sub">
    <input type="submit" name="submit" value="div">
    <input type="submit" name="submit" value="Mul">
</form></body>
</html>