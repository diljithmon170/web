<html>
<?php
echo("hai<br>");
// $a=10;
// $b=20;
// $c=0;
// echo $a."<br>";
// function add(){
//     global $a,$b,$c;
//     $c=$a+$b;
//     echo($c."<br>");
//     echo($a . "<br>");
// }
// add();
// $count=1;
// $sum=0;
// do
// {
//     $sum+=$count;
//     $count++;
// }while($count<=100);
// echo($sum);
$num=111;
$x=0;
$nn=$num;
while(floor($num))
{
    $n=$num%10;
    $x=$x * 10 + $n;
    $num=$num/10;
}
if ($x==$nn){
    echo("$nn is palindrome");
}
else{
    echo("$nn is not palindrome");
}
?>
</html>