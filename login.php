<?php

    include ("connection.php");

    if(empty($_POST['username']) )
    {
        echo "the username and password field is empty";
    }
else
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql  = "select * from users where username = '$username' and password = '$password'";

    $result = mysqli_query($db,$sql);

    if(mysli_num_rows($result) == 1)
    {
        header("location: home.php");
    }else
    {
        echo "invalid username and password";
    }
}



?>