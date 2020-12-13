<?php 
 //$months = array('Jan','Feb','March', 'April','May');
 $months = ['Jany','Feb','March', 'April','May'];
 var_dump($months);
 print_r($months)

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1/> Months of the year</h1>
    <?php foreach ($months as $month){
        echo "<li>$month</li>";
    }
    ?>
</body>
</html>