<?php
session_start();
require '../Admin/connection.php';
$submit=$_POST['payfees'];
if(isset($submit))
{
$adm=$_POST['adm'];
$amount=$_POST['amount'];
$mode=$_POST['mode'];


}else {
  ?>
	  <script>
	  alert("Please Check Your Input!!");
	  window.location="dashboard.php";
	  </script>
	  <?php
}
$date=date("Y-m-d");
$sql = "SELECT EXISTS(SELECT * FROM payments WHERE student_id=$adm)";
if(mysqli_query($connect, $sql)){
  // Get the Total Billed minus Paid to give balance
  $bal="SELECT MAX(balance)  as bal, total as total From payments WHERE student_id='$adm'";
  $result=$connect->query($bal)->fetch_assoc();
	$bal= $result['bal'];
	$total= $result['total'];
	$cbal= $bal - $amount ;
	
	$sql = "INSERT INTO `payments` (`id`, `student_id`, `total`,`paid`, `date`,`mode`,`balance`) VALUES (NULL, '$adm', '$total', '$amount', '$date','$mode','$cbal')";
	if(mysqli_query($connect, $sql)){
		// Send SMS notification to parent
	$phone="SELECT * From student WHERE admno='$adm'";
  $res=$connect->query($phone)->fetch_assoc();
	$phone= $res['phone'];
	$parent= $res['parent'];
	$name=$res['name'];
		$message="<#Lifeway Schools> Dear $parent, we have received a payment of Ksh. $amount for $name, current balance is Ksh. $cbal. Thank you!";
		require_once('../sms/SMS.php');
		?>
			<script>
			alert("Payment Successul!");
			window.location="dashboard.php";
			</script>
			<?php
	}  
}
 

else
{
  ?>
	  <script>
	  alert("Fail to update Payment");
	  window.location="payfees.php";
	  </script>
	  <?php
}
// close connection
mysqli_close($connect);
?>
