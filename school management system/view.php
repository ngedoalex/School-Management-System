<?php 
include 'connection.php'; 
//deleting
if(isset($_REQUEST['del'])){
$PKID=$_REQUEST['del'];

echo $PKID;
$sql_DELETE="DELETE FROM STUDENT where  studentID ='$PKID'";

$sql_query=mysqli_query($connect, $sql_DELETE);
}

if(isset($_REQUEST['UPDATE_RECORD'])){
$PKID=$_REQUEST['UPDATE_RECORD'];
$sql_query="SELECT *from student where studentID='$PKID'";//sql fetchh query
$sql_update=mysqli_query($connect, $sql_query);//excuting
$row=mysqli_fetch_assoc($sql_update); //reteiving


//echo $PKID;
?>
<form id="form1" name="form1" method="post" action="">
  <table  border="0" bordercolor="#684ED1" bgcolor="#0033FF">
    <tr>
      <td colspan="2">UPDATE RECORD </td>
    </tr>
    <tr>
      <td><div align="right">Name:</div></td>
      <td><label>
        <input type="text" value="<?php echo $row['Name'];?>" name="Name" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Age:</div></td>
      <td><label>
        <input type="text" value="<?php echo $row['Age'];?>" name="Age" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Sex:</div></td>
      <td><label>
        <input type="text" value="<?php echo $row['Sex'];?>" name="Sex" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Phone:</div></td>
      <td><label>
        <input type="text" value="<?php echo $row['Phone'];?>" name="Phone" />
      </label></td>
    </tr>
    <tr>
      <td><label></label></td>
      <td><input type="submit" name="update_students" value="UPDATE" /></td>
    </tr>
  </table>
</form>



<?php

}
//update code
if(isset($_POST['update_students'])){
$name=$_POST['Name'];
$age=$_POST['Age'];
$sex=$_POST['Sex'];
$phone=$_POST['Phone'];


//echo $name;
$insert_query= "UPDATE `student` SET `name`='$name',`Age`='$age',`Sex`='$sex',`Phone`='$phone' WHERE studentID='$PKID'";
$sql_insert=mysqli_query($connect, $insert_query);
if($sql_insert==TRUE){
echo 'success';}
else{
echo 'Failed';

}
}


$fetch_query="select *from student";
$sql_query=mysqli_query($connect, $fetch_query);
//$result=mysqli_fetch_assoc($sql_query);//arranging attributes
//displaying the results


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<a href="student.php">student</a>
<table width="200" border="1">
  <tr>
    <td>Name</td>
    <td>Age</td>
    <td>Sex</td>
    <td>Phone</td>
  <td>Action</td>
  <td>Action</td>
  </tr>
  <?php
  while($result=mysqli_fetch_assoc($sql_query)){
  ?>
  <tr>
    <td><?php echo $result['Name']; ?></td>
    <td><?php echo $result['Age']; ?></td>
    <td><?php echo $result['Sex']; ?></td>
    <td><?php echo $result['Phone']; ?></td>
	<td><a href="?del=<?php echo $result['studentID']; ?>">del</a></td>
	<td><a href="?UPDATE_RECORD=<?php echo $result['studentID']; ?>">update</a></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>
