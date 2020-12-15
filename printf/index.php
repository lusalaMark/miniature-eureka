<?php
//$date_post_made = sprintf(' This post was made on %s, %s,%d','Dec', '15th', '2020');
 //echo $date_post_made;

 sscanf("Dec 15th, 2077720", "%s, %[^,], %d", $month, $day, $year );
 echo $year;
?>