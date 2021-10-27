<?php 


include('signup.php');

$Name=$_POST['Username'];
$Email=$_POST['Email'];
$MatricNo=$_POST['Matric_no'];
$Department=$_POST['Department'];
$University=$_POST['University'];
$DateOfBirth=$_POST['Your_Date'];
$Origin=$_POST['Origin'];
$level=$_POST['level'];
$Password=$_POST['Password'];
$Repeat_Password=$_POST['Repeat_Password'];

$query= mysqli_query($conn,"select *from users where Username = '".$Name."' ");
$row= mysqli_fetch_array($query);

if(mysqli_num_rows($query) >0){

echo "Username already taken, please choose another Username.";

exit();
}
elseIF(mysqli_num_rows($query) <1 AND ($Name !=="" AND $Email !=="" AND $MatricNo !=="" AND $Department !=="" AND $University !=="" AND $DateOfBirth !=="" AND $Password !=="" AND $Repeat_Password !=="")AND ($Password == $Repeat_Password) )



{

$sql=  "insert into  users (Username,Email,Matric_no,Department,University,Your_Date,Origin,level,Password) Values ('".$Name."','".$Email."','".$MatricNo."','".$Department."','".$University."','".$DateOfBirth."','".$Origin."','".$level."','".$Password."')";


@$conn->query($sql)===TRUE;



	
}


elseif (isset($_POST['Submit']) AND ($Name =="" or $Email =="" or $MatricNo =="" OR $Department =="" or $University =="" or $DateOfBirth ==""  OR $Password =="" OR $Repeat_Password =="")){

echo"Please fill all the form.";	
exit();
}


if (isset($_POST['Submit']) AND ($Name !=="" or $Email !=="" or $MatricNo !=="" OR $Department !=="" or $University !=="" or $DateOfBirth !=="" OR $Password !=="" OR $Repeat_Password !=="")AND ($Password == $Repeat_Password) )
 
	
 {

$query= mysqli_query($conn,"select *from users where Username = '".$Name."' ");


$row= mysqli_fetch_array($query);

echo "USERNAME :". $row['Username']; 
echo "<br/>EMAIL :". $row['Email'];
echo "<br/>MATRIC NUMBER :". $row['Matric_no'];
echo "<br/>DEPARTMENT :". $row['Department'];
echo "<br/>UNIVERSITY :". $row['University'];
echo "<br/>DATE OF BIRTH :". $row['Your_Date'];
echo "<br/>STATE OF ORIGIN :". $row['Origin'];
echo "<br/>LEVEL :". $row['level'];
echo "<br/>PASSWORD :". $row['Password'];
#echo "PASSWORD :". $Repeat_Password;

}





elseif (isset($_POST['Submit']) AND ($Name =="" or $Email =="" or $MatricNo =="" OR $Department =="" or $University =="" or $DateOfBirth ==""  OR $Password =="" OR $Repeat_Password =="")){

echo"Please fill all the form.";	
exit();
}
 


elseIF($Password !== $Repeat_Password ){
echo"password not match pls re check.";

}

 ?>
F($Password !== $Repeat_Password ){
echo"password not match pls re check.";

}

 ?>