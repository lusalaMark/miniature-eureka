<?php 
if(isset($_POST['submit'])){
    echo 'yes it works';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checking form for data submission</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" placeholder="Enter Username">
        <br>
        <input type="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>