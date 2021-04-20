<?php
session_start();
require '../Admin/connection.php';
$submit=$_POST['addstudent'];
if(isset($submit))
{
$adm=$_POST['adm'];
$name=$_POST['name'];
$form=$_POST['form'];
$branch=$_POST['branch'];
$parent=$_POST['parent'];
$contact=$_POST['contact'];

$date=date("Y-m-d");

}else {
  ?>
	  <script>
	  alert("Please Check Your Input!!");
	  window.location="dashboard.php";
	  </script>
	  <?php
}


$sql = "INSERT INTO `student` (`id`, `admno`, `name`, `form`, `branch_id`,`parent`,`phone`) VALUES (NULL, '$adm', '$name', '$form', '$branch','$parent','$contact')";
if(mysqli_query($connect, $sql)){


    $sql = "INSERT INTO `payments` (`id`, `student_id`, `total`, `paid`,`date`,`mode`,`balance`) VALUES (NULL, '$adm', (SELECT amount FROM fees WHERE form=(SELECT form FROM student WHERE admno = '$adm')), 0,'$date','NOT SPECIFIED',(SELECT amount FROM fees WHERE form=(SELECT form FROM student WHERE admno = '$adm')))";
    mysqli_query($connect, $sql);
  


	
  ?>
	  <script>
	  alert("Student Added Successuly");
	  window.location="dashboard.php";
	  </script>
	  <?php
}
else
{
  ?>
	  <script>
	  alert("Error Adding Student");
	  window.location="adduser.php";
	  </script>
	  <?php
}
// close connection
mysqli_close($connect);
?>
