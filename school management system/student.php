<?php 
include 'connection.php'; 
if (isset($_POST['Submit'])){
echo 'active';
$name=$_POST['Name'];
$age=$_POST['Age'];
$sex=$_POST['Sex'];
$phone=$_POST['Phone'];


//echo $name;
$insert_query= "INSERT INTO `student`(`Name`, `Age`, `Sex`, `Phone`) VALUES ('$name','$age','$sex','$phone')";
$sql_insert=mysqli_query($connect, $insert_query);
if($sql_insert==TRUE){
echo 'success';}
else{
echo 'Failed';

}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<a href="view.php">student</a>

<form id="form1" name="form1" method="post" action="">
  <table  border="0" bordercolor="#684ED1" bgcolor="#0033FF">
    <tr>
      <td colspan="2">STUDENT FORM </td>
    </tr>
    <tr>
      <td><div align="right">Name:</div></td>
      <td><label>
        <input type="text" name="Name" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Age:</div></td>
      <td><label>
        <input type="text" name="Age" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Sex:</div></td>
      <td><label>
        <input type="text" name="Sex" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Phone:</div></td>
      <td><label>
        <input type="text" name="Phone" />
      </label></td>
    </tr>
    <tr>
      <td><label></label></td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>

</html>
