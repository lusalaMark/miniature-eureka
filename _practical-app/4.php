<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

	function calculations(){
		$number1 = 10;
		$number2 = 29;
		$sum = $number1 + $number2;
		return $sum;
	}
$theSum = calculations();
echo $theSum;
	function add_Numbers ($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}
	$result = add_Numbers(23, 48);
	echo $result ;

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>