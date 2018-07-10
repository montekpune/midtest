
<?php

include('dept.php');

if(isset($_GET['id']))
{
 $sql_query="DELETE FROM deptmnt WHERE id=".$_GET['id'];
 mysql_query($sql_query);
   header('Location: http://localhost/demo/dept1/dept3.php');
}

?>