<?php

include 'connect.php';

if(isset($_POST['signup']))
{
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From users where  email='$email' ";
    $result=$conn->query($checkEmail);

    if($result->num_rows>0)
    {
        echo "Email address already Exists !";
    }
    else
    {
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
        VALUES ('$firstName','$lastName','$email','$password')";

        if($conn->query($insertQuery)==TRUE)
        {
            header("location:index.php");
        }
        else
        {
            echo "error:".$conn->error;
        }
    }

}

if(isset($_POST['signin']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password' ";
    $result=$conn->query($sql);

    if($result->num_rows>0)
    {
        session_start();

        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("loaction : homepage.php");
        exit();
    }
    else{
        echo "not found ,incorrect email or password";
    }
}
?>