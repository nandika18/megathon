<!DOCTYPE html>
<?php
include('func1.php');
$pid='';
$ID='';
$appdate='';
$apptime='';
$fname = '';
$lname= '';
$doctor = $_SESSION['dname'];
if(isset($_GET['pid']) && isset($_GET['ID']) && ($_GET['appdate']) && isset($_GET['apptime']) && isset($_GET['fname']) && isset($_GET['lname'])) {
$pid = $_GET['pid'];
  $ID = $_GET['ID'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $appdate = $_GET['appdate'];
  $apptime = $_GET['apptime'];
}



if(isset($_POST['prescribe']) && isset($_POST['pid']) && isset($_POST['ID']) && isset($_POST['appdate']) && isset($_POST['apptime']) && isset($_POST['lname']) && isset($_POST['fname'])){
  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];
  $disease = $_POST['disease'];
  $allergy = $_POST['allergy'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pid = $_POST['pid'];
  $ID = $_POST['ID'];
  $prescription = $_POST['prescription'];
  
  $query=mysqli_query($con,"insert into prestb(doctor,pid,ID,fname,lname,appdate,apptime,disease,allergy,prescription) values ('$doctor','$pid','$ID','$fname','$lname','$appdate','$apptime','$disease','$allergy','$prescription')");
    if($query)
    {
      echo "<script>alert('Prescribed successfully!');</script>";
    }
    else{
      echo "<script>alert('Unable to process your request. Try again!');</script>";
    }
  // else{
  //   echo "<script>alert('GET is not working!');</script>";
  // }initial
  // enga error?
}

?>

<html lang="en">
  <head>
<title>Prescribe</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="photo/plus.png" />
    <meta name="viewport" content="width=device-width, -scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #d4efff, #d4efff);
}
.list-group-item.active {
    z-index: 2;
    color: black;
    background-color:#d4efff;
    border-color: black;
}
.text-primary {
    color: black;
}

.btn-primary{
  background-color: #32aaf0;
  border-color: #d4efff;
}
.fa-sign-out:before {
    color: black;
    content: "\f08b";
}
.bx-log-out:before {
    content: "\eb4f";
    color: black;
}

.navbar-expand-lg .navbar-collapse {
    display: -ms-flexbox!important;
    display: flex!important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
    padding-left: 85%;
}

  </style>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"> <i class='bx bx-log-out icon' ></i><font color = "black">Logout</font></a>
        
      </li>
       <li class="nav-item">
       <a class="nav-link" href="doctor-panel.php"><i class="fa fa-sign-out" aria-hidden="true"></i><font color = "black">Back</font></a>
      </li>
    </ul>
  </div>
</nav>

</head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>

<body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h2 style = "margin-left: 50%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"><b> Welcome &nbsp<?php echo $doctor ?><b>
   </h2>

   <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
        <form class="form-group" name="prescribeform" method="post" action="prescribe.php">
        
          <div class="row">
                  <div class="col-md-4"><label><h3><br>Disease:</h3></label></div>
                  <div class="col-md-8">
                  <!-- <input type="text" class="form-control" name="disease" required> -->
                  <textarea id="disease" cols="86" rows ="5" name="disease" required></textarea>
                  </div><br><br><br>
                  
                  <div class="col-md-4"><label><h3><br>Allergies:</h3></label></div>
                  <div class="col-md-8">
                  <!-- <input type="text"  class="form-control" name="allergy" required> -->
                  <textarea id="allergy" cols="86" rows ="5" name="allergy" required></textarea>
                  </div><br><br><br><br><br>
                  <div class="col-md-4"><label><h3><br><br>Prescription:</h3></label></div>
                  <div class="col-md-8">
                  <!-- <input type="text" class="form-control"  name="prescription"  required> -->
                  <textarea id="prescription" cols="86" rows ="10" name="prescription" required></textarea>
                  </div><br><br><br>
                  <input type="hidden" name="fname" value="<?php echo $fname ?>" />
                  <input type="hidden" name="lname" value="<?php echo $lname ?>" />
                  <input type="hidden" name="appdate" value="<?php echo $appdate ?>" />
                  <input type="hidden" name="apptime" value="<?php echo $apptime ?>" />
                  <input type="hidden" name="pid" value="<?php echo $pid ?>" />
                  <input type="hidden" name="ID" value="<?php echo $ID ?>" />
                  <br><br><br><br>
          <input type="submit" name="Prescribe" value="Prescribe" class="btn btn-primary" style="margin-left: 53pc;">
          
        </form>
        <br>
        
      </div>
      </div>