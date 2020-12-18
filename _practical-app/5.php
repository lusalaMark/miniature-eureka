<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


//Step1: Use a pre-built math function here and echo it
echo sqrt(9) . '<br>';


	//Step 2:  Use a pre-built string function here and echo it
$name = "Mark Lusala";
echo strlen($name). '<br>';

//Step 3:  Use a pre-built Array function here and echo it
$numbers = [1,2,3,4,5,6,7,8,9];
echo max($numbers);


	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>