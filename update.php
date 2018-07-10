
<?php

include_once 'dept.php';
if(isset($_POST['submit']))
{
  $id = $_POST['id'];
  $emp_fname = $_POST['emp_fname'];
  $emp_lname = $_POST['emp_lname'];
  $email_id = $_POST['email_id'];
  $contact_no = $_POST['contact_no'];
  $dept = $_POST['dept'];
  $dob=$_POST['date'];
   //echo "UPDATE dept SET emp_fname='$emp_fname',emp_lname='$emp_lname',email_id='$email_id',contact_no=$contact_no,dept='$dept',dept='$dept' WHERE id=$id";exit();
           
  $sql_query = "UPDATE deptmnt SET emp_fname='$emp_fname',emp_lname='$emp_lname',email_id='$email_id',contact_no='$contact_no',dept='$dept',dob='$dob' WHERE id=$id";
   $result_set = mysql_query($sql_query);
   

   if($result_set)
   {
       echo 'Data Updated Successfully';
       header('Location: http://localhost/demo/dept1/dept3.php');
   }else{
       echo 'Data Not Updated';
   }

}

?>