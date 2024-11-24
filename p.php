<html>
<?php
echo("hai<br>");
//find sum
function add(){
    global $a,$b,$c;
    $c=$a+$b;
    echo("sum= ".$c."<br>");
}
//call function
add();

//pgm to check num is pal or not
$count=1;
$sum=0;
do
{
    $sum+=$count;
    $count++;
}while($count<=100);
echo($sum);
$num=111;
$x=0;
$nn=$num;
//palindrome
// floor 5.3=5
// ceil 5.6=6
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