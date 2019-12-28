<?php
session_start();
$firstname="";
$email="";
$mobile="";
$errors=array();
//connect to the database
$conn=mysqli_connect("localhost","root","","hello")or die("connection failed");
echo "database connected";

//if the register button is clicked
if(isset($_POST['register']))

{
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];

    // ensure that form fileds filled properly
    if(empty($firstname))
    {
      array_push($errors,"First Name is required");
    }
    if(empty($lastname))
    {
      array_push($errors,"Last Name is required");
    }
    if(empty($email))
    {
      array_push($errors,"Email is required");

    }
    if(empty($gender))
    {
      array_push($errors,"please select gender");
    }
    
    if(empty($password1))
    {
      array_push($errors,"Password is required");
    }
    
    
    if($password1!=$password2)
    {
      array_push($errors," Both Passwords does not match");
    }

    // if there are no errors save user to database
    if(count($errors)==0)
    {
      //$password=md5('$password1');// encrypt password before storing in database(security)
      $sql="INSERT into world (firstname,middlename,lastname,email,mobile,password,gender)values('$firstname','$middlename',
      '$lastname','$email','$mobile','$password1','$gender')";
      mysqli_query($conn,$sql);
      $_SESSION['firstname']=$firstname;
      $_SESSION['success']="you are now logged in";
      header('location:index.php');  // redirect to homepage


    }
    
}
   // log user in form login page
   if(isset($_POST['login']))
   {
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($email))
    {
      array_push($errors,"email required");
    }
    if(empty($password))
    {
      array_push($errors,"password required");
    }
    
      
      $sql="SELECT * from world where email='$email'and password='$password'";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)==1)
      {
      $_SESSION['firstname']=$firstname;
      $_SESSION['success']="you are now logged in";
      header('location:crud.php');

      }
      else{
        array_push($errors,"email or password does not match");

      }
    
   }
    //logout

    if(isset($_GET['logout']))
    {
      session_destroy();
      unset($_SESSION['firstname']);
      header('location:loginn.php');

    }
    





?>