<?php

$username = "sass-1995";
$password= "";
$database = new PDO("mysql :host=localhost;dbname=contral;","sass-1995","");

if($contral){

echo "connection";

}










$Motor1=$_POST['MOT1'];
$Motor2=$_POST['MOT2'];
$Motor3=$_POST['MOT3'];
$Motor4=$_POST['MOT4'];
$Motor5=$_POST['MOT5'];
$Motor6=$_POST['MOT6'];

$conn=new mysqli("localhost","root","","smatmethod");

// save
if (isset($_POST['save']))
{
  echo "<br>";
  $my_query="";
 $my_query="select *from motors_values WHERE 1";
 $result=mysqli_query($connection,$my_query);

$my_query="insert into save ($Motor1,$Motor2,$Motor3,$Motor4,$Motor5,$Motor6) values ('MOT1','MOT2','MOT3','MOT4','MOT5','MOT6')";
$result =mysqli_query($connection, $my_query);
//check connection
if($result)

{
echo "the data is inserted correctly!";
}

else {
  echo   " error:unable to past ";

}
//on
}if (isset($_POST['on']))
{
  echo "<br>";
  $my_query="";
 $my_query="select *from motors_values WHERE 1";
 $result=mysqli_query($connection,$my_query);

$my_query="insert into save ($Motor1,$Motor2,$Motor3,$Motor4,$Motor5,$Motor6) values ('MOT1','MOT2','MOT3','MOT4','MOT5','MOT6')";
$result =mysqli_query($connection, $my_query);
//check connection
if($result)

{
echo "the data is inserted correctly!";
}

else {
  echo   " error:unable to past ";

}
//OFF
if (isset($_POST['off']))
{
  echo "<br>";
  $my_query="";
 $my_query="select *from motors_values WHERE 1";
 $result=mysqli_query($connection,$my_query);

$my_query="insert into save ($Motor1,$Motor2,$Motor3,$Motor4,$Motor5,$Motor6) values ('MOT1','MOT2','MOT3','MOT4','MOT5','MOT6')";
$result =mysqli_query($connection, $my_query);
//check connection
if($result)

{
echo "the data is inserted correctly!";
}

else {
  echo   " error:unable to past ";

}










?>
