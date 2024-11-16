<?php
session_start();
include('../common/db.php');
if(isset($_POST['signup'])){
    // echo "Username is ".$_POST['username']."<br>";
    // echo "email is ".$_POST['email']."<br>";
    // echo "Password is ".$_POST['password']."<br>";
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $user=$conn->prepare("Insert into `users` (`id`, `username`, `email`, `password`) values (NULL,'$username','$email','$password');");
    $result = $user->execute();

    if($result){
        echo "New User registered successfully";
        $_SESSION['user']=["username"=>$username, "email"=>$email];
    }
    else{
        echo "Error: ".$conn->error; 
    }

}elseif(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username="";
    $query= "select * from users where email='$email' and password='$password' ";
    $result=$conn->query($query);
    
    if($result->num_rows==1){
        foreach($result as $row){
            $username=$row['username'];
        }
    }
    if($email){
        echo "User login successfully";
        $_SESSION['user']=["username"=>$username, "email"=>$email];
        header("location: /Discuss_PHP");
    }
    else{
        echo "Error: ".$conn->error; 
    }
}
elseif(isset($_GET['logout'])){
    session_unset();
    header("location: /Discuss_PHP");
}
?>