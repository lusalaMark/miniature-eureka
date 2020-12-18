<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 for ($i=0; $i<=10; $i++){
	 echo $i . '<br>';
 }
if (1<3){
	echo "I love PHP" . "<br>";
}elseif (20<10){
	echo "You need to be serious with life" . "<br>";
}
	

$value = 10;

switch($value){
	case 1:
		echo "This is usala";
		break;
	case 2:
		echo "This is marla";
		break;
	case 10:
		echo "This is mark Lusala";
		break;
	default:
	echo " Invalid case";

}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>