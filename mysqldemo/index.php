<?php
// require_once($_SERVER['DOCUMENT_ROOT'] . "/ntany3/system/startup.php");
require 'connection.php'; 
if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $join= $_POST["join"];
    $password= $_POST["password"];


    $query = "INSERT INTO logins VALUES('$name', '$email', '$join', '$password','')";
    mysqli_query($conn, $query);
    echo
    "
    <script>
    alert('DATA INSERTED INTO DATABASEEEE!!! :D'); //dont use double quotation
    </script>
    ";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    label{
        display:block;
    }
</style>
<body>
    <form class="" action="" method="post" autocomplete="off">
        <label for="">Name</label>
        <input type="text" name="name" required value="">
        <label for="">email</label>
        <input type="text" name="email" required value="">
        <label for="">join date</label>
        <input type="text" name="join" required value="">
        <label for="">password</label>
        <input type="text" name="password" required value="">
        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>