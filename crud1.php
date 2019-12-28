<?php
session_start();
//initialize variables
$name="";
$email="";
$class="";
$year="";
$city="";
$country="";
$id=0;
$edit_state=false;
// connect to database
$db=mysqli_connect("localhost","root","","hello")or die("connection failed");

// if save button is clicked

if(isset($_POST['save']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$class=$_POST['class'];
	$year=$_POST['year'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	

	$query="INSERT into crud(name,email,class,year,city,country)values('$name','$email','$class','$year','$city','$country')";
	mysqli_query($db,$query);
	$_SESSION['msg']="address saved";
	header('location:crud.php');  // redirect to index page after inserting


}

// update records

if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$class=$_POST['class'];
	$year=$_POST['year'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$id=$_POST['id'];

	mysqli_query($db,"UPDATE crud set name='$name',email='$email',class='$class',year='$year',city='$city',country='$country' where id=$id");
	$_SESSION['msg']="address updated";
	header('location:crud.php'); 
}

// delete records

if(isset($_GET['del']))
{
	$id=$_GET['del'];
	mysqli_query($db,"DELETE from crud where id=$id");
	$_SESSION['msg']="address deleted";
	header('location:crud.php'); 
}


// retrieve records

$result=mysqli_query($db,"SELECT * from crud");





?>