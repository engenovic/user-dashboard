<?php
// session_start();
include '../Admin/connection.php';
// Current User
// $acc=$_SESSION['user'];
// $sql="select users.name as name, branch.name as bname FROM users JOIN branch on branch.id=users.branch_id  WHERE users.username= '$acc'";
// $result=mysqli_query($connect,$sql);
//  while ($row=mysqli_fetch_array($result))
//  {
//  	$name=$row['name'];
//   $branch=$row['bname'];
  
//  }


 
  
 //Payments

  $pquery="SELECT DISTINCT student.admno,student.name,student.form,(SELECT MAX(balance) FROM payments) as bal, 
  student.phone, branch.name as bname,payments.total,payments.paid,payments.date,payments.mode
  FROM student JOIN branch ON branch.id=student.branch_id JOIN payments ON payments.student_id=student.admno";
 $presult=mysqli_query($connect,$pquery);
   //die(mysqli_error($connect));
  if(mysqli_num_rows($presult)>0) {
   while($row=mysqli_fetch_assoc($presult)){
   $payments[]=$row;
   }
   //Student

  $Squery="SELECT * FROM student";
 $Sresult=mysqli_query($connect,$Squery);
   //die(mysqli_error($connect));
  if(mysqli_num_rows($Sresult)>0) {
   while($row=mysqli_fetch_assoc($Sresult)){
   $students[]=$row;
   }
  }
}
 ?>