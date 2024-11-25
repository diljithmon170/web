<?php
//initializing server user pass db
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check conn
if ($conn->connect_error){
    die("connection error".$conn->connect_error);
}
echo "connected to db";
//create table
if ($conn){
    $sql="CREATE TABLE demo(id int primary key,name varchar(30),number varchar(30))";
    $res=mysqli_query($conn,$sql);
    //check true
    if($res==TRUE){
        echo "table created";
    }
    else{
        echo "table not created". mysqli_error($conn);
    }
    

    //insert data
    $sql1="INSERT INTO demo(id,name,number) VALUES('$_POST[id]','$_POST[name]','$_POST[num]')";
    $ins1=mysqli_query($conn,$sql1);
    //check true
    if($ins1==TRUE){
        echo "datas inserted ";
    }
    else{
        echo "data not inserted".mysqli_error($conn);
    }


    // //select query
    $sql2="SELECT * FROM demo";
    $res2=mysqli_query($conn,$sql2);

        //if datas is inside
    if($res2){
        echo "<br><br>";

        //fetch the data
        while($row=$res2->fetch_assoc()){
            echo "id= " .$row["id"]."<br>";
            echo "name= " .$row["name"]."<br>";
            echo "number= " .$row["number"]."<br>";
        }}
        else{
            //if no datas
            echo "0 result";
        }


        //UPDATE    demo
    $sql3="UPDATE demo SET name='lost123' WHERE id=2";
    $res3=mysqli_query($conn,$sql3);
        //if data in res
    if ($res3){
        echo "data updated";
        }
    else{
        echo "data not updated".mysqli_error($conn);
    }
    }
    //close the connection
    mysqli_close($conn);
?>
<html>
    <body>
        <form method="post" action="pdb.php">
        id : <input type="number" name="id"><br>
        name : <input type="text" name="name"><br>
        number : <input type="number" name="num"><br>
        <input type="submit" value="insert">
</form>
</body>
</html>