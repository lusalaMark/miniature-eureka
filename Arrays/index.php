<?php 
 //$months = array('Jan','Feb','March', 'April','May');
 //$months = ['Jany','Feb','March', 'April','May'];

 $betting_websites = array(
     'betway' => 'https://www.betway.co.ke/' ,
     'betika' => 'https://www.betika.com/',
     'mozart' => 'https://www.mozzartbet.co.ke/en#/',
 );
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
    <?php //foreach ($months as $month => ){
        //echo "<li>$month</li>";
    //}
    foreach ($betting_websites as $site => $url){
        echo "<li><a href = \"$url\">" . ucwords($site) . "+</a></li>";
    }
    ?>
</body>
</html>