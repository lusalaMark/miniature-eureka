<?php 
if(isset($_POST['submit'])){
    $minimum = 5;
    $maximum = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $name = array("Mark","Wim","Shammah","Set","Faith","Sharon");
    
    if(strlen($username) < $minimum ){
      echo "Username has to longer than 5 ";
    }
    
    if(strlen($username) > $maximum){
       echo "Username has to be less than 10";
    }
    
    echo "Hello " . $username;
    echo "Your Password is " . $password;
    
    if(in_array($username, $name)){
        echo "Sorry you cannot login";
    }else{
        echo 'Welcome';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checking form for data submission</title>
</head>
<body>
    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>