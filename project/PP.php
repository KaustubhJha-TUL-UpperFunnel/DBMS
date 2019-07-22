<?php
	session_start();
	

	$host = "localhost";
	$dbusername ="root";
	$dbpassword="";
	$dbname ="insurance";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

	

	$Ssn = $_GET['Ssn'];
	$Password = $_GET['Password'];
	
	
	// $presql1 = "SELECT Ssn FROM customer WHERE Ssn=$Ssn";
	// $preresult1 =mysqli_query($conn,$presql);
	// $row1 = $preresult->fetch_assoc();

	$presql = "SELECT Password FROM agnt_password WHERE Ssn=$Ssn";
	$preresult =mysqli_query($conn,$presql);
	$row = $preresult->fetch_assoc();
	//$count=mysqli_num_rows($preresult);
	//echo $row['COUNTNO'];
	
	//echo $row[$Ssn];



	if($conn && !is_null($Ssn) && !is_null($Password))

	{
		if($row['Password']==$Password){
				$sql = "SELECT customer.Ssn AS SSN,Fname,Lname,customer.Policy_num FROM customer, payment WHERE customer.Ssn = payment.Ssn AND Payment_no > 2;
";

				$pre =mysqli_query($conn,$sql);
				$row1 = $pre->fetch_assoc();
				// if($conn->query($sql)===TRUE){
				// 	echo "New record created successfully";
				// }
				// else{
				// 	echo "Error: " . $sql ."<br>" .$conn->error;
				// }
				echo "<h3>PREMIUM PAYMENTS DONE BY USING TWO OR MORE PAYMENTS:-</h3><br><br>";

					$Ssn = $row1["SSN"];
			        $fname = $row1["Fname"];
			        $lname = $row1["Lname"];
			        
			 		echo "<h4>";
			        echo "SSN:-  ".$Ssn." "."Name :-  ".$fname." ".$lname;
			        echo "</h4><br>";

				while ($row1 = $pre->fetch_assoc()) {
						
				        $Ssn = $row1["SSN"];
				        $fname = $row1["Fname"];
				        $lname = $row1["Lname"];
				 
			        	echo "<p id='box'><h4>";
				        echo "SSN:-  "." ".$Ssn." "."Name :-  ".$fname." ".$lname;
				        echo "</h4></p><br>";
    			}
				
		
		}
		else{
			echo "<h3>";
			echo "Wrong password";
			echo "</h3>";
		}
	}
	else{
		echo "no connection";
	}
	// $sql = "SELECT SSN,DL_number FROM customer WHERE Ssn = $loginid ";

	// $result = mysqli_query($conn,$sql);

	// $row = $result->fetch_assoc();

	// // echo $row['SSN'] . " " . $row['DL_number'];

	// // echo "<br />".$logindl ." ". $loginid ;

	// $count = mysqli_num_rows($result);


	// if($count == 1){
	// 	// session_register($loginid);
	// 	$_SESSION['login_user'] = $loginid ;

	// 	//echo $row['Name'];
	// 	$sql1 = "SELECT * FROM customer" ;
	// 	$result1 = mysqli_query($conn,$sql1);

	// 	$row1 = $result1->fetch_assoc();

	// 	echo "<div id='name_of_user'>" ;
	// 		echo "HELLO USER :-               " . $row1['Name'] ."<br /> <br />"  ;
	// 	echo "</div>";

	// 	echo "<div id='details'>" ;
	// 		echo "YOUR SALARY IS :-           " . $row1['Salary'] ."<br /> <br />" ;
	// 	echo "</div>";

		
	// }
	// else
	// {
	// 	echo "entry not found in the database" ;
	// }


	$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="UI1style.css">
	<style type="text/css">
		#box {
            width: 625px;
            padding: 100px;
            position:relative;
            left:30%;
         }
	</style>
</head>
<body>

</body>
</html>