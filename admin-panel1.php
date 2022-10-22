<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");

include('newfunc.php');

if(isset($_POST['docsub']))
{
  $doctor=$_POST['doctor'];
  $dpassword=$_POST['dpassword'];
  $demail=$_POST['demail'];
  $spec=$_POST['special'];
  $docFees=$_POST['docFees'];
  $query="insert into doctb(username,password,email,spec,docFees)values('$doctor','$dpassword','$demail','$spec','$docFees')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Doctor added successfully!');</script>";
  }
}


if(isset($_POST['docsub1']))
{
  $demail=$_POST['demail'];
  $query="delete from doctb where email='$demail';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Doctor removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}


?>
<html lang="en">
  <head>

<title>Receptionist Portal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="photo/plus.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     

  <script >
    var check = function() {
  if (document.getElementById('dpassword').value ==
    document.getElementById('cdpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

  <style >
   

.col-md-4{
  max-width:20% !important;
}

.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}



.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 20px;}
}
/* Google Font Import - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    /* ===== Colors ===== */
    --body-color: #d4efff;
    --sidebar-color: #FFF;
    --primary-color: #40aeee;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #000000;

    /* ====== Transition ====== */
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}

body{
    min-height: 100vh;
    background-color: var(--body-color);
    transition: var(--tran-05);
}

::selection{
    background-color: var(--primary-color);
    color: #fff;
}

body.dark{
    --body-color: #18191a;
    --sidebar-color: #242526;
    --primary-color: rgb(165, 159, 159);
    --primary-color-light: #3a3b3c;
    --toggle-color: #ffffff;
    --text-color: #ffffff;
}

/* ===== Sidebar ===== */
 .sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;  
}
.sidebar.close{
    width: 88px;
}

/* ===== Reusable code - Here ===== */
.sidebar li{
    height: 50px;
    list-style: none;
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.sidebar header .image,
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
}

.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.sidebar .text,
.sidebar .icon{
    color: var(--text-color);
    transition: var(--tran-03);
}

.sidebar .text{
    font-size: 17px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;
}
.sidebar.close .text{
    opacity: 0;
}
/* =========================== */

.sidebar header{
    position: relative;
}

.sidebar header .image-text{
    display: flex;
    align-items: center;
}
.sidebar header .logo-text{
    display: flex;
    flex-direction: column;
}
header .image-text .name {
    margin-top: 2px;
    font-size: 18px;
    font-weight: 600;
}

header .image-text .profession{
    font-size: 16px;
    margin-top: -2px;
    display: block;
}

.sidebar header .image{
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar header .image img{
    width: 40px;
    border-radius: 6px;
}

.sidebar header .toggle{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color: var(--primary-color);
    color: var(--sidebar-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: var(--tran-05);
}

body.dark .sidebar header .toggle{
    color: var(--text-color);
}

.sidebar.close .toggle{
    transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu{
    margin-top: 40px;
}

.sidebar li.search-box{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    cursor: pointer;
    transition: var(--tran-05);
}

.sidebar li.search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    background-color: var(--primary-color-light);
    color: var(--text-color);
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    transition: var(--tran-05);
}
.sidebar li a{
    list-style: none;
    height: 100%;
    background-color: transparent;
    display: flex;
    align-items: center;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    text-decoration: none;
    transition: var(--tran-03);
}

.sidebar li a:hover{
    background-color: var(--primary-color);
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text{
    color: var(--text-color);
}

.sidebar .menu-bar{
    height: calc(100% - 55px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar{
    display: none;
}
.sidebar .menu-bar .mode{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    position: relative;
    transition: var(--tran-05);
}

.menu-bar .mode .sun-moon{
    height: 50px;
    width: 60px;
}

.mode .sun-moon i{
    position: absolute;
}
.mode .sun-moon i.sun{
    opacity: 0;
}
body.dark .mode .sun-moon i.sun{
    opacity: 1;
}
body.dark .mode .sun-moon i.moon{
    opacity: 0;
}

.menu-bar .bottom-content .toggle-switch{
    position: absolute;
    right: 0;
    height: 100%;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}
.toggle-switch .switch{
    position: relative;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
    transition: var(--tran-05);
}

.switch::before{
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background-color: var(--sidebar-color);
    transition: var(--tran-04);
}

body.dark .switch::before{
    left: 20px;
}

.home{
    position: absolute;
    top: 0;
    top: 0;
    left: 250px;
    height: 100vh;
    width: calc(100% - 250px);
    background-color: var(--body-color);
    transition: var(--tran-05);
}
.home .text{
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

.sidebar.close ~ .home{
    left: 78px;
    height: 100vh;
    width: calc(100% );
}
body.dark .home .text{
    color: var(--text-color);
}
.content.dark{
    font-size: 4vmax;
    text-align: center;
    padding:5%;
    font-weight: bold;
    color: var(--text-color);
}
.content {
    font-size: 4vmax;
    text-align: center;
    padding:15%;
    font-weight: bold;
    color: var(--text-color);
}
  </style>

  
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
   <h1 style = "margin-left: 35%; padding-bottom: 20px;font-family:'Poppins', sans-serif; font-weight:bold;font-size:xxx-large;">&nbsp&nbspWelcome Receptionist</h3>

    <center><b><h1><span id="datetime" ></span></h1><b></center>
      <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
      </script>
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
 
       <nav class="sidebar close"> 
        <header>
            <div class="image-text">
                <span class="image"></span>
                <div class="text logo-text">
                <span class="name">Receptionist<br> Portal</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                <a  id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">
                <i class='bx bx-category icon' ></i>

                <span class="text nav-text"> Dashboard</span>
                </a>
              </li>
                
              <li class="search-box">
              <a href="#list-doc" id="list-doc-list" role="tab" aria-controls="home" data-toggle="list">
                <i class='bx bx-group icon' ></i>

                <span class="text nav-text"> Doctor List</span>
                </a>
              </li>
              <li class="search-box">
            
               
                <a  href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">
                <i class='bx bx-user-plus icon' ></i>
                <span class="text nav-text">Patient List</span>
                </a>
              </li>
              <li class="search-box">
              <a href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">
                <i class='bx bx-calendar-plus icon' ></i>

                <span class="text nav-text">Appointment Details</span>
                </a>
              </li>
              <li class="search-box">
                <a  href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">
                <i class='bx bx-file  icon' ></i>
                <span class="text nav-text"> Prescription List</span>
                </a>
              </li>
              <li class="search-box">
              <a href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">
                <i class='bx bx-add-to-queue icon' ></i>

                <span class="text nav-text">Add Doctor</span>
                </a>
              </li>
              <li class="search-box">
              <a  href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">
                <i class='bx bx-message-alt-x icon' ></i>

                <span class="text nav-text">Delete Doctor</span>
                </a>
              </li>
              <li class="search-box">
              <a href="#list-mes" id="list-mes-list"  role="tab" data-toggle="list" aria-controls="home">
                <i class='bx bx-question-mark icon' ></i>

                <span class="text nav-text">Queries</span>
                </a>
              </li>
              <li class="search-box">
              <a href="qr.html" >
                <i class='bx bx-qr-scan icon' ></i>

                <span class="text nav-text">QR code</span>
                </a>
              </li>
      <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
        <br><br><br>
       
</div>
    </div><br>
  </div>

  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-black" >
              <div class="row">
               <div class="col-sm-4" style="left: 40%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Doctor List</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      <p class="links cl-effect-1">
                        <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                          View Doctors
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: 40%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          View Patients
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              

                <div class="col-sm-4" style="left: 40%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                          View Appointments
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 40%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Prescription List</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          View Prescriptions
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 40%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Doctors</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Doctors</a>
                        &nbsp|
                        <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                          Delete Doctors
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                
                        
                <div class="col-sm-4" style="left: 40%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">QR code</h4>
                    
                      <p class="cl-effect-1">
                        <a href="qr.html" >Generate</a>
                        
                      
                      </p>
                    </div>
                  </div>
                </div>
                
              </div>
                        

      
                
         </div>
    </div>

    <!--DOCTOR LIST-->
      <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">
              

              <div class="col-md-8" style="left: 60%">
      <form class="form-group" action="doctorsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Email ID" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div>
      </form>
    </div>
      </div>
      <div class="col-md-8" style="left: 60%">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Fees</th>
                  </tr>
                </thead>
                <tbody>
                     
                  <?php 
                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;
                    $query = "select * from doctb";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $username = $row['username'];
                      $spec = $row['spec'];
                      $email = $row['email'];
                      $password = $row['password'];
                      $docFees = $row['docFees'];
                      
                      echo "<tr>
                        <td>$username</td>
                        <td>$spec</td>
                        <td>$email</td>
                        <td>$password</td>
                        <td>$docFees</td>
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
       </div>
                  
   <!--PATIENT LIST-->

    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

       <div class="col-md-8" style="left: 60%">
      <form class="form-group" action="patientsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="patient_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-primary" value="Search"></div>
      </form>
      </div>
    </div>
    <div class="col-md-8" style="left: 45%">
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;
                    $query = "select * from patreg";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $pid = $row['pid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $gender = $row['gender'];
                      $email = $row['email'];
                      $contact = $row['contact'];
                      $password = $row['password'];
                      
                      echo "<tr>
                        <td>$pid</td>
                        <td>$fname</td>
                        <td>$lname</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$contact</td>
                        <td>$password</td>
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
                  </div>
<!--PRESCRPTION DETAILS-->
      <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

       <div class="col-md-8" style="left: 40%">
  
        <div class="row">
        
    
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">Doctor</th>
                    <th scope="col">Patient ID</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Disease</th>
                    <th scope="col">Allergy</th>
                    <th scope="col">Prescription</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;
                    $query = "select * from prestb";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $doctor = $row['doctor'];
                      $pid = $row['pid'];
                      $ID = $row['ID'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $appdate = $row['appdate'];
                      $apptime = $row['apptime'];
                      $disease = $row['disease'];
                      $allergy = $row['allergy'];
                      $pres = $row['prescription'];

                      
                      echo "<tr>
                        <td>$doctor</td>
                        <td>$pid</td>
                        <td>$ID</td>
                        <td>$fname</td>
                        <td>$lname</td>
                        <td>$appdate</td>
                        <td>$apptime</td>
                        <td>$disease</td>
                        <td>$allergy</td>
                        <td>$pres</td>
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
      </div>
      </div>



 <!-- APPOINTMENT DETAILS -->
      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

         <div class="col-md-8" style="left: 60%">
      <form class="form-group" action="appsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="app_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="app_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
    <div class="col-md-8" style="left: 25%">
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">Appointment ID</th>
                  <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Consultancy Fees</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Appointment Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['doctor'];?></td>
                        <td><?php echo $row['docFees'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td>
                    <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                    {
                      echo "Active";
                    }
                    if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
                    {
                      echo "Cancelled by Patient";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
                    {
                      echo "Cancelled by Doctor";
                    }
                        ?></td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>
                  </div>
<!--ADD DOCTOR-->
<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <div class="col-md-8" style="left: 60%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
                  <div class="col-md-4" ><label>Doctor Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctor" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Specialization </label></div>
                  <div class="col-md-8">
                   <select name="special" class="form-control" id="special" required="required">
                      <option value="head" name="spec" disabled selected>Select Specialization</option>
                      <option value="General" name="spec">General</option>
                      <option value="Cardiologist" name="spec">Cardiologist</option>
                      <option value="Neurologist" name="spec">Neurologist</option>
                      <option value="Pediatrician" name="spec">Pediatrician</option>
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="dpassword" id="dpassword"  required></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8"  id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>
                   
                  
                  <div class="col-md-4"><label>Consultancy Fees:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="docFees" required></div><br><br>
                </div>
                  
          <input type="submit" name="docsub" value="Add Doctor" class="btn btn-primary">
        </form>
      </div>
                  </div>
<!--DELETE DOCTOR-->
      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group" method="post" action="admin-panel1.php">
        <div class="col-md-8" style="left: 60%">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  
                </div>
          <input type="submit" name="docsub1" value="Delete Doctor" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>
                  </div>
<!--QUERIES-->
       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>

       <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

         <div class="col-md-8" style="left: 60%">
      <form class="form-group" action="messearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
    <div class="col-md-8" style="left: 60%">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;

                    $query = "select * from contact;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
              
                      #$fname = $row['fname'];
                      #$lname = $row['lname'];
                      #$email = $row['email'];
                      #$contact = $row['contact'];
                  ?>
                      <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['message'];?></td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>
                    </div>


    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
   <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
        </script>
    </section>
    
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>
</body>
</html>