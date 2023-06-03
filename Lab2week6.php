<?php
$page_title='Lab 2 internet Programming';
//header
include ('./headerBrow.html');

function empDetails(string $a, float $b, float $c)	{
	echo"<br/> Employee name : $a";
	echo"<br/> Pay Rate : $ $b";
	echo"<br/> number of hours worked in a week : $c hours";
	$weekPay = $b * $c;
	echo"<br/>weekly pay is : $ $weekPay";
						}
function overtime(int $d){
	$over = 1.5 * ($d-35) ;
	echo"<br/>Your overtime pay is $over";
}


if(isset($_REQUEST['name'])){
		$empName = $_REQUEST['name'];}
if(isset($_REQUEST['payRate'])){
		$payRate = $_REQUEST['payRate'];}
if(isset($_REQUEST['hoursPweek'])){
		$hoursWork = $_REQUEST['hoursPweek'];}
if(isset($_REQUEST['add'])){
		$array = $_REQUEST['add'];}
function employeeTab(string $e, float $f, float $g){		
$name= array();
$pay = array();
$hours = array();
$workers = array();
$salary = array();
$time = array();
echo"<br/>";
array_push( $name, $e);
array_push( $pay, $f);
array_push( $hours, $g);
$workers = array_pop( $name);
$salary = array_pop( $pay);
$time = array_pop( $hours);
echo"<br/>";
print_r("$workers, ");
print_r($salary);
print_r(", $time");
}
//check if the form has been submitted
if(isset($_POST['submitted']))
	{
	//minimal form validation
	if(!empty($_POST['name']) && is_numeric($_POST['payRate']) && is_numeric($_POST['hoursPweek']))
		{
			if($payRate <=25 && $hoursWork <= 60){
			//display output
			empDetails($empName,$payRate,$hoursWork);
			employeeTab($empName,$payRate,$hoursWork);
			}
			if($hoursWork > 35 && $hoursWork <= 60 && $payRate <=25)
			{
			overtime($hoursWork);
			echo"<br/>thank your for your hardwork";}
			else
			{
				if($payRate > 25)
				{echo" ERROR your are payed more than me";}
				if($hoursWork > 60)
				{
				echo"<br/>You are overworked report to union";}
			}
		}
		else
			{ //one element not filled out
				echo'<h1 id="mainhead">ERROR<h1>';
			}
	}
	else
	{ //one element not filled out
		echo'<h1 id="mainhead">Please key in details below<h1>';
	}

?>
<html>
	<body>
	
		<form action="lab2week6.php" method="POST" >
			<p> Employee Name <input type="text" name="name" 
				value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>"/></p>
				
			<p> Pay Rate <input type="text" name="payRate" 
				value="<?php if(isset($_POST['payRate'])) echo $_POST['payRate'] ?>"/></p>
				
			<p> number of hours worked in a week<input type="text" name="hoursPweek" 
				value="<?php if(isset($_POST['hoursPweek'])) echo $_POST['hoursPweek'] ?>"/></p>
				
				
		<p><input type="submit" value="submit"/></p>
		<input type="hidden" name="submitted" value="TRUE"/>
		</form>
						
			
			
		
	</body>
</html>
<?php

include ('./footerBrow.html');
//footer
?>
		
		
