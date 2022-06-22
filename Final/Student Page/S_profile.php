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


/*Table*/
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: #1E90FC;}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

span {
  background-color: rgb(189, 186, 186);
}

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
<!--SIDEBAR-->
<?php if (isset($_SESSION['username'])) : ?>

<!--SIDEBAR-->
<div id="mySidebar" class="sidebar">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<a href="#" style="text-align: center;padding-right: 20px;"><img src="../images/Student_profile.png" width="120" height="120"></a>

<a href="#" style="text-align: center; font-size: 15px; padding-right: 20px;"><?php echo $_SESSION['username']; ?>
<br><b>Sajol, Jenie Campos</b></a><br>


<a href="S_appointment.php"><img src="../images/appointment.png" width="20" height="20" >&ensp;My Appointments</a>
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
                    </a> 
                    </div>

    <br>

    <div style="padding-left: 30px;">
         <h2> My Profile </h2>
         <div class="w3-container w3-white" style="background: white;">
            <div>
                <h2><img src="../images/info.png" width="30" height="30"> Student General Information <a style="float: right" href="#"><img src="../images/edit.png" width="30" height="30"></a>
                </h2>
                <div class="row">
                  <div class="column">
                    <p>Student No.: <span> &ensp; 2017100665 &ensp;</span></p>
                    <p>Name: <span>&ensp;SAJOL, JENIE&ensp;</span></p>
                    <p>Gender: <span>&ensp; Female &ensp;</span></p>
                    <p>Age: <span> &ensp; 21 &ensp;</span></p>
                    <p>Nationality: <span>&ensp;Filipino&ensp;</span></p>
                    <p>Contact No.: <span>&ensp;09356501173&ensp;</span></p>
                    <p>Email: <span>&ensp;sajol@gmail.com&ensp;</span></p>
                  </div>
                  <div class="column">
                    <p>College: <span> College of Information Technology and Computing</span></p>
                    <p>Program: <span> &ensp; B.S. in Information Technology &ensp;</span></p>
                    <p>Major: <span> &ensp; N/A &ensp;</span></p>
                    <p>Year Level: <span> &ensp; 4th Year &ensp;</span></p>
                    <p>Curriculum: <span> &ensp; CITC-BSIT-2017-2018 &ensp;</span></p>
                    <p>Campus: <span> &ensp; Cagayan de Oro Campus &ensp;</span></p>
                  </div>
                </div>
            </div>
         </div>

        </div>

    </div>
</div>
    
</div>


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
