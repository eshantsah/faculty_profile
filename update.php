
<?php
include('dbcon.php');

session_start();
if($_SESSION['uid'])
{
//$name=$_SESSION['uname'];
//echo $_SESSION['uid'];
//session_destroy();
//$con = mysqli_connect('localhost','root','root','prof');
if(isset($_POST['update']))
{  $name=$_SESSION['uid'];

$query2="SELECT * FROM `faculty_profile` WHERE `uid`='$name' "; // change to uid
$run2=mysqli_query($con,$query2);
$row=mysqli_fetch_assoc($run2);
  # code...
  


}









}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Create Your Profile</title>
</head>
  <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   body{

    background: blue; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#3333ff, #4d4dff); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(red, yellow); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(red, yellow); /* For Firefox 3.6 to 15 */
    background: linear-gradient( to right,cyan,#e8f3f8,cyan); /* Standard syntax */

  }

  h1{
    font-family:"Times New Roman", Times, serif;
    color: #ff8000;
    font-size: 50px;
    font-weight: bold;
  }
  @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
body {
    font: 12px 'Open Sans';
}
.form-control, .thumbnail {
    border-radius: 2px;
}
.btn-danger {
    background-color: #B73333;
}

/* File Upload */
.fake-shadow {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload #logo-id {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.img-preview {
    max-width: 100%;
}
  </style>
<body>
<!--faculty
<a href="logout.php">logout</a>-->
<div class="container">
<div class="row">
  <div class="col-md-4"><br>
  <img style="float: left;" src="img/logo1.png">
  </div>
  <div class="col-md-8">
    <h1 style="float: right;">Atharva College Of Engineering</h1>
  </div>  
</div>
  <div class="row">
    
    <hr />
      <form role="form" method="post" action="updated_view.php" enctype="multipart/form-data">
    <div class="col-md-4 ">
        <div class="form-group">
              <div class="main-img-preview">
                <img class="thumbnail img-preview" src= "<?php
echo $row['image'];

?>" title="Preview Logo">
              </div>
              <div class="input-group">
                <input style="width: 35%;" id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
               
                  <div class="fileUpload btn btn-danger fake-shadow">
                    <span><i class="glyphicon glyphicon-upload"></i> Upload Photo</span>
                    <input id="logo-id" name="image" type="file" class="attachment_upload">
                  </div>
              </div>
              <p class="help-block">* Upload your Photo</p>
            </div>
    </div>
    <div class="col-md-8">
     


              
              <div class="form-group">
              <input type="text" class="form-control" id="name" value=" <?php echo $_SESSION['uid']; ?>" name="uid" readonly="readonly" >
            </div>

              <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];   ?>"  placeholder="Name">
            </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="dsg"  value="<?php echo $row['designation'];   ?>" name="dsg" placeholder="Designation">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="dept" placeholder="Department" value="<?php echo $row['department'];   ?>" name="dept">
            </div>
              <div class="form-group">
              <input type="text" class="form-control" id="doj" placeholder="Date of Joining Institution(dd/mm/yyyy)" value="<?php echo $row['doj'];   ?>" name="doj">
            </div>
             <div class="form-group">
              <input type="text" class="form-control" id="address" placeholder="address" value="<?php echo $row['address'];   ?>" name="address">
            </div>
             <div class="form-group">
              <input type="text" class="form-control" id="email" placeholder="Enter email" value="<?php echo $row['email'];   ?>" name="email">
            </div>
             <div class="form-group">
              <input maxlength="10" size="10" type="tel" class="form-control" id="cno" placeholder="Contact Number" value="<?php echo $row['contact'];   ?>" name="cno">
            </div>
            <h4>Experience:</h4>
            <div class="row">

                          <div class="col-md-5">
                 <div class="form-group">           
              <input type="text" class="form-control" id="10th" placeholder="Teaching" name="teach"  value="<?php echo $row['teach'];   ?>">
            </div>
              
              
                 <div class="form-group">           
              <input type="text" class="form-control" id="12th" placeholder="Industry" name="inds"  value="<?php echo $row['inds'];   ?>">
            </div>
              </div>
              <div class="col-md-5">
                 <div class="form-group">           
              <input type="text" class="form-control" id="grad" placeholder="Research" name="research"  value="<?php echo $row['research'];   ?>">
            </div>
              
                 <div class="form-group">           
              <input type="text" class="form-control" id="pgrad" placeholder="Admin" name="admin"  value="<?php echo $row['admin'];   ?>">
            </div>
              </div>
            </div>
            <h4>Qualification:</h4>
            <div class="row">

                          <div class="col-md-5">
                 <div class="form-group">           
              <input type="text" class="form-control" id="10th" placeholder="Under Graduation" value="<?php echo $row['ssc'];   ?>" name="ssc">
            </div>
              
              
                 <div class="form-group">           
              <input type="text" class="form-control" id="12th" placeholder="Post Graduation" value="<?php echo $row['hsc'];   ?>" name="hsc">
            </div>
              </div>
              <div class="col-md-5">
                 <div class="form-group">           
              <input type="text" class="form-control" id="grad" placeholder="PHD" value="<?php echo $row['grad'];   ?>" name="grad">
            </div>
              
                 <div class="form-group">           
              <input type="text" class="form-control" id="pgrad" placeholder="Others" value="<?php echo $row['p_grad'];   ?>" name="pgrad">
            </div>
              </div>
            </div>
             <div class="form-group">           
              <input type="text" class="form-control" id="pfolio1" placeholder=" Department Level Portfolio" value="<?php echo $row['p1'];   ?>" name="pfolio1">
            </div>
             <div class="form-group">           
              <input type="text" class="form-control" id="pfolio2" placeholder=" College Level Portfolio" value="<?php echo $row['p2'];   ?>"  name="pfolio2">
            </div>

<h4>Scale:</h4>   
            <div class="form-group">           
              <input type="text" class="form-control" id="scope" placeholder="Skills you have...." value="<?php echo $row['skills'];   ?>"  name="skills">
            </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="scope" placeholder="Salary" name="salary" value="<?php echo $row['salary'];   ?>" >
            </div>
            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Acheivement of the Year..." name="achievements" value="<?php echo $row['achievements'];   ?>"  >
            </div>

<h4>Result:</h4>
            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Format: Year-subject-percentage-class(FE)" name="result1" value="<?php echo $row['result1'];   ?>">
            </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Format: Year-subject-percentage-class(FE)" name="result2" value="<?php echo $row['result2'];  ?>">
            </div>

            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Format: Year-subject-percentage-class(FE)" name="result3" value="<?php echo $row['result3'];  ?>">
            </div>


            <div class="form-group">           
              <input type="text" class="form-control" id="acheivement" placeholder="Format: Year-subject-percentage-class(FE)" name="result4" value="<?php echo $row['result4']; ?>">
            </div>
            
            <div class="form-group" id="radio">
              <label style="font-size:20px;">Status:&nbsp&nbsp</label>
              <input type="radio" name="status" value="working" id="work" checked>&nbsp
              <label style="font-size:20px; color:green;">Working</label>&nbsp&nbsp&nbsp
              <input type="radio" name="status" value="left" id="left">&nbsp
              <label style="font-size:20px; color:red;">Left</label>&nbsp&nbsp&nbsp
            </div>
           
           <div class="form-group">           
              <input type="text" class="form-control" id="leave" placeholder="Leave Record" name="leave" value="<?php echo $row['leave_record'];   ?>" >
            </div>

             
             <button style="width: 20%;height:50px;font-size: 20px; border-radius: 15px;margin-left: 37%;" class="w3-white" id="btn" name="submit">Submit</button><br><br><br>

   
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
        readURL(this);
    });
});



</script>
</body>
</html>



