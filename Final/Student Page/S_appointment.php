<?php
session_start();
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: Student_login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: Student_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
  <title>USTP Appointment System</title>
  <meta charset="utf-8">
    <title>Appointment System</title><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'><link rel="stylesheet" href="./style.css">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color: #a09e9e;
}

.sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1E90FC;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #000000;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #ffffff;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 30px;
  cursor: pointer;
  background-color: transparent;
  color: rgb(43, 42, 42);
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 250px;
}

.split {
  float: right;
  padding-top: 0px;
}




/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
  .topnav a, .topnav input[type=text], .topnav button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

tr:hover {background-color: #1E90FC;}

/*Dropdown*/
.dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #1E90FC;
}

.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

</style>
</head>
<body>  
		<?php if (isset($_SESSION['username'])) : ?>

            <!--SIDEBAR-->
            <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="#" style="text-align: center;padding-right: 20px;"><img src="../images/Student_profile.png" width="120" height="120"></a>

            <a href="#" style="text-align: center; font-size: 15px; padding-right: 20px;"><?php echo $_SESSION['username'];
             ?><br><b>Sajol, Jenie Campos</b></a><br>

            
            <a href="#"><img src="../images/appointment.png" width="20" height="20" >&ensp;My Appointments</a>
            <a href="S_profile.php"><img src="../images/schedule.png" width="20" height="20">&ensp;My Profile</a>
            <a href="S_settings.php"><img src="../images/settings.png" width="20" height="20">&ensp;Settings</a>

            </div>

            <div style="padding-left: 0px;" id="main" class="w3-container w3-grey">
            <div><!--NAV BAR-->
                    <div class="w3-container w3-white" style="background: white;">
                        <button class="openbtn" onclick="openNav()">☰ </button>
                        <a href="#" class="split">
                        <div class="dropdown">
                            <button  onclick="myFunction()" class="dropbtn"><img src="../images/Student_profile.png" width="35" height="35">
                            </button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="Logout.php">Log out</a>
                            </div>
                        </div>  
                     
                    </div><br>
            <div class="container">           

            <!--APPOINTMENT RESULT-->

            <div class="col w3-container w3-white" style="padding-top: 20px; background: white;">
                        <div class="row">
                            <div class="col">
                                <h3>Appointments</h3>
                            </div>
                            <div class="col form-group">
                                <button type="button" class="btn btn-danger btn-block" id="btn_clear_storage" onclick="clear_storage()">Clear Appointments</button>
                            </div>
                        </div>

                        <!--FORM TABLE-->
                        <table class="table table-bordered table-hover table-striped table-sm" id="appointment_list">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center align-middle">Date</th>
                                    <th scope="col" class="text-center align-middle">Description</th>
                                    <th scope="col" class="text-center align-middle">Instructor</th>
                                    <th scope="col" class="text-center align-middle">Start time</th>
                                    <th scope="col" class="text-center align-middle">End time</th>
                                    <th scope="col" class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table><br>
                    </div>
                <br>
            </div>

             <!--CALENDAR-->
             <div class="row">
            <div class="calendar col-md-8 offset-md-2">
                <div>
                    <div class="card-header bg-primary">
                        <ul>
                            <li id="month" class="text-white text-uppercase text-center">
                            </li>
                            <li id="year" class="text-white text-uppercase text-center">
                            </li>
                        </ul>
                    </div>
                    <table class="table calendar table-bordered table-responsive-sm" id="calendar">
                        <thead>
                            <tr class="weekdays bg-dark">
                              <th scope="col" class="text-white text-center">Mo</th>
                              <th scope="col" class="text-white text-center">Tu</th>
                              <th scope="col" class="text-white text-center">We</th>
                              <th scope="col" class="text-white text-center">Th</th>
                              <th scope="col" class="text-white text-center">Fr</th>
                              <th scope="col" class="text-white text-center">Sa</th>
                              <th scope="col" class="text-white text-center">Su</th>
                            </tr>
                          </thead>
                        <tbody class="days bg-light" id="days"></tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--FORM-->
            <div class="row">
                    <div class="col " style="padding-top: 10px;" >
                        <form id="form_create_appointment">
                            <div class="form-row">
                                <div class="col form-group">
                                    <label class="required">Date</label>
                                    <input class="form-control date-input" type="text" id="date" data-trigger="hover" data-toggle="popover" title="Date" data-content="You can select any date from today clicking on the number in the calendar" required>
                                </div>
                                <div class="col form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" id="description">
                                </div>
                                <div class="col form-group">
                                    <label>Instructor</label>
                                    <input class="form-control" type="text" id="instructor">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label class="required">Start Time</label>
                                    <input class="form-control time-input" type="text" id="start_time" required>
                                </div>
                                <div class="col form-group">
                                    <label class="required">End Time</label>
                                    <input class="form-control time-input" type="text" id="end_time" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <button type="button" class="btn btn-warning btn-block" id="clear" onclick="clear_input()">Clear Form</button>
                                </div>
                                <div class="col form-group">
                                    <button type="button" class="btn btn-primary btn-block" id="submit" onclick="make_appointment()" disabled="disabled">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div><br>

                <br>

                

                <br><br><br>

                


            </div>
                
            </div>

            <!-- partial -->
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js'></script><script  src="./script.js"></script>

            <!--JAVASCRIPT-->
            <script>
            function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            }

            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
                }
            }
            }
            </script>
		<?php endif ?>
</body>
</html>
