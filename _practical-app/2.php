<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */
			$number1 = 10;
			$number2 = 20;

			echo $number1 + $number2 . "<br>";
            

			$months = array ("Jan","Feb","March", "April","May");
			print_r ($months);

			$months_of_the_year = array (
				"First_Month"  => "Jan",
				"Second_month" => "Feb",
				"Third_month"  => "March",
				"Forth_Month"  => "April",
				"Fifth_Month"  => "May"
			);
            echo $months[0]  . "<br>";

			echo $months_of_the_year['First_Month'];
		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>