
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  height: 100%;
  width: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background: #a09e9e url("https://pbs.twimg.com/media/EUWQ2wNUMAEgQkF?format=jpg&name=large");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.logo {
  display: block;
  text-align: center;
  margin-top: 30px;
}

.topnav {
  overflow: hidden;
  background-color: #1E90FC;
}

.topnav-right a {
  color: #f2f2f2;
  float: right;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  padding-top: 25px;
  padding-right: 80px;
  padding-bottom: 25px;
}
.p {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding-left: 14px;
  text-decoration: none;
  font-size: 30px;
  padding-top: 18px;
}

a:hover {
    color: #060707;
}

/*Dropdown*/
.dropdown {
  float: right;
  text-align: center;
  font-size: 20px;
  padding-top: 25px;
  padding-right: 80px;
  padding-bottom: 25px;
}

.dropdown .dropbtn {
  font-size: 20px;    
  border: none;
  outline: none;
  color: white;
  background-color: transparent;
  font-family: inherit;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

 .dropdown:hover .dropbtn {
  color: black;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .dropdown .dropbtn {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .dropdown {float: none;}
  .dropdown-content {position: relative;}
  .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav">
  <div class="p"><img src="https://icons.veryicon.com/png/o/miscellaneous/icon-library-of-x-bacteria/appointment-4.png" height="28" width="28">  Appointment Booking System</div>
  <div class="topnav-right">
    <div class="dropdown">
        <button class="dropbtn">Login 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="Instructor Page/Instructor_login.php">Instructor</a>
            <a href="Student Page/Student_login.php">Student</a>
        </div>
    </div>
    <a href="#search">About Us</a>
    <a href="#about">Home</a>
  </div>
</div>

<div style="padding-left:16px">
    <div class="logo">
    <img src="https://upload.wikimedia.org/wikipedia/en/0/01/University_of_Science_and_Technology_of_Southern_Philippines.png" height="200" width="200">
    </div>

</div>

</body>
</html>