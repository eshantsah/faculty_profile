
<?php
include('dbcon.php');
//$con = mysqli_connect('localhost','root','root','prof');
if(isset($_POST['submit']))
{
// $imagename=$_FILES['image']['name'];
// $tempimgname=$_FILES['image']['tmp_name'];


$name=$_POST['name'];
$uid=$_POST['uid'];
$dsg=$_POST['dsg'];
$dept=$_POST['dept'];
$doj=$_POST['doj'];
$address=$_POST['address'];
$email=$_POST['email'];
$cno=$_POST['cno'];
$ssc=$_POST['ssc'];
$hsc=$_POST['hsc'];
$grad=$_POST['grad'];
$pgrad=$_POST['pgrad'];
$pfolio1=$_POST['pfolio1'];
$pfolio2=$_POST['pfolio2'];
$remarks=$_POST['remarks'];
$skills=$_POST['skills'];
$achievements=$_POST['achievements'];
$status=$_POST['status'];
$leave=$_POST['leave'];
$salary=$_POST['salary'];
$teach=$_POST['teach'];
$inds=$_POST['inds'];
$research=$_POST['research'];
$admin=$_POST['admin'];
$result1=$_POST['result1'];
$result2=$_POST['result2'];
$result3=$_POST['result3'];
$result4=$_POST['result4'];



$query1 = mysqli_query($con,"SELECT * FROM `faculty_profile` WHERE `uid` = '$uid'");
$numrows = mysqli_num_rows($query1);
if($numrows ==1){
 // header('location:a.php');
 ?>
<script>
alert('Already Submitted,You Can Update Your Profile'); 
window.open('insert.php','_self');
</script>
<?php 
   }


else{
//move_uploaded_file($tempimgname,"$imagename");


$imagename=$_FILES['image']['name'];
$actual_name = pathinfo($imagename,PATHINFO_FILENAME);
$original_name = $actual_name;
$extension = pathinfo($imagename, PATHINFO_EXTENSION);
$target = "";
$i = 1;
while(file_exists($target.$actual_name.".".$extension)){       
    $actual_name = $original_name.$i;
    $imagename = $actual_name.".".$extension;
    $i++;
}



$target = $target.basename( $imagename ) ; 
echo move_uploaded_file($_FILES['image']['tmp_name'], $target) ? 
        ""
        : "Sorry, there was a problem uploading your file.";











move_uploaded_file($tempimgname,"$imagename");
echo "<script> console.log('upload completed');</script>";


$query="INSERT INTO `faculty_profile`(`uid`, `image`, `name`, `designation`, `department`, `doj`, `address`, `email`, `contact`,`teach`, `inds`, `research`, `admin`,`ssc`, `hsc`, `grad`, `p_grad`, `p1`, `p2`, `skills`, `salary`, `achievements`, `status`,`result1`, `result2`, `result3`, `result4`, `leave_record`, `remarks`) VALUES ('$uid','$imagename','$name','$dsg','$dept','$doj','$address','$email','$cno', '$teach','$inds','$research','$admin','$ssc','$hsc','$grad','$pgrad','$pfolio1','$pfolio2','$skills','$salary','$achievements','$status','$result1','$result2','$result3','$result4','$leave','$remarks')";
  $run=mysqli_query($con,$query);







$query2="SELECT `image` FROM `faculty_profile` WHERE `uid`='$uid' ";
$run2=mysqli_query($con,$query2);
$row=mysqli_fetch_array($run2);

  
}

 } 

?>



<!DOCTYPE html>
<html>
<head>
	<title>Preview File</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/blue.css" />
<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
<!--[if IE 5]>
<link href="css/ie5.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/cufon.yui.js"></script>
<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/myriad.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>

<style type="text/css">

table, td, th{
  border: 5px solid black;
  
}

#profile {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#profile td, #profile th {
    border: 1px solid #ddd;
    padding: 10px;

}

h1{
    font-family:"Times New Roman", Times, serif;
    color: #ff8000;
    font-size: 50px;
    font-weight: bold;
  }
#profile td {
  font-size:20px;
}

#profile th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background: linear-gradient( to right,cyan,#e8f3f8,cyan);
    color: white;
}
#profile{
  width:80%;
  height:80%;
  margin-left:10%;
}

	</style>

</head>


<body>

<form>
	
		<table id="profile">

				<tr>
					<th  style="border-bottom: 2px solid black;" colspan="2"><center><img src="img/logo1.png"></center></th>
					<th  style="border-bottom: 2px solid black;" colspan="8"><center><h1>Atharva College Of Engineering</h1><center></th>
				</tr>

				<tr>
					<td  colspan="2">Name Of the Faculty</td>
					<td  colspan="5"><?php echo $_POST['name']; ?> </td>
					<td  colspan="3" rowspan="4"><center><img  src= "<?php
echo $row['image'];

?>" width="200" height="200"></center></td>
				</tr>

				<tr>
					<td  colspan="2">Department</td>
					<td  colspan="5"><?php echo $_POST['dept']; ?></td>
				</tr>

				<tr>
					<td  colspan="2">Designation</td>
					<td  colspan="2"><?php echo $_POST['dsg']; ?></td>
					<td  colspan="1">Salary</td>
<td  colspan="2"><?php echo $_POST['salary']; ?></td>
				</tr>


				<tr>
					<td  colspan="2">Date Of Joining Institustion</td>
					<td  colspan="5"><?php echo $_POST['doj']; ?></td>
				</tr>

				<tr>
					<td colspan="2">Address</td>
					<td colspan="8"><?php echo $_POST['address']; ?></td>
				</tr>

				<tr>
					<td colspan="2">Email Id</td>
					<td colspan="8"><?php echo $_POST['email']; ?></td>
				</tr>

				<tr>
					<td colspan="2">Contact Number</td>
					<td colspan="8"><?php echo $_POST['cno']; ?></td>
				</tr>

				<tr>
					<td colspan="2" rowspan="2">Qualification</td>
					<td colspan="2">Under Graduation</td>
					<td colspan="2">Post Graduation</td>
					<td colspan="2">PHD</td>
					<td colspan="2">Others</td>
				</tr>

				<tr>
					<td colspan="2"><?php echo $_POST['ssc']; ?></td>
					<td colspan="2"><?php echo $_POST['hsc']; ?></td>
					<td colspan="2"><?php echo $_POST['grad']; ?></td>
					<td colspan="2"><?php echo $_POST['pgrad']; ?></td>
				
				</tr>

				<tr>
					<td colspan="2" rowspan="2">Total Experience in</td>
					<td colspan="2">Teaching</td>
					<td colspan="2">Industry</td>
					<td colspan="2">Research</td>
					<td colspan="2">Admin</td>
					
				</tr>

				<tr>
					<td colspan="2"><?php echo $_POST['teach']; ?></td>
					<td colspan="2"><?php echo $_POST['inds']; ?></td>
					<td colspan="2"><?php echo $_POST['research']; ?></td>
					<td colspan="2"><?php echo $_POST['admin']; ?></td>
				
				</tr>

				
				<tr>
					<td colspan="2" rowspan="2">Portfolio</td>
					<td colspan="8"><?php echo $_POST['pfolio1']; ?>
					</td>
				</tr>

				<tr>
					<td colspan="8"><?php echo $_POST['pfolio2']; ?>
					</td>
				</tr>

				<tr>
					<td colspan="2">skills</td>
					<td colspan="8"><?php echo $_POST['skills']; ?></td>
					
				</tr>

				

				<tr>
					<td colspan="2">achievements</td>
					<td colspan="8"><?php echo $_POST['achievements']; ?></td>
					
				</tr>

				<tr>
					<td colspan="2">status</td>
					<td colspan="8"><h4 style="color:green;"><?php echo $_POST['status']; ?></h4></td>
					
				</tr>
 <tr>
          <td colspan="2" rowspan="4">Results:</td> 
          <td colspan="8"><?php echo $_POST['result1']; ?></td>
        </tr>

         <tr>
           
          <td colspan="8"><?php echo $_POST['result2']; ?></td>
        </tr>

        <tr>
           
          <td colspan="8"><?php echo $_POST['result3']; ?></td>
        </tr>
        <tr>
           
          <td colspan="8"><?php echo $_POST['result4']; ?></td>
        </tr>

				<tr>
					<td colspan="2"> Special leave record</td>
					<td colspan="8"><?php echo $_POST['leave']; ?></td>
					
				</tr>

				



		</table>

<br><br><br>
<center>
      <button style="background-color:white;color:black;height: 18%;width:8%;font-size: 20px;border:1px solid black;padding:3px;" id="btn1" name="preview"><a style="text-decoration: none;" href="logout.php">Logout</a></button><br><br><br>
 </center>

</form>


</body>
</html>