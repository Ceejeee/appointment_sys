<?php include('Instructor_server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>
		USTP Appointment System
	</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
<style>
    body {
    height: 600px;
    width: 100%;
    font-family: "Lato", sans-serif;
    background: #a09e9e url("https://pbs.twimg.com/media/EUWQ2yqUEAE8hOC?format=jpg&name=large");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }

    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    }

    #shape {
    border-radius: 25px;
    background: #ffffff;
    opacity: 85%;
    padding: 20px; 
    width: 400px;
    height: 250px;  
    margin-left: auto;
    margin-right: auto;
    margin-top: 2px;
    }
</style>
</head>
<body>
    <img src="https://upload.wikimedia.org/wikipedia/en/0/01/University_of_Science_and_Technology_of_Southern_Philippines.png" height="200" width="200">    

	<div id="shape">
	<form method="post" action="Instructor_login.php">

		<?php include('errors.php'); ?>

		<div style="text-align: center; padding-top: 20px" >
        <!--Username-->
        <input style="border-radius: 8px" type="username" placeholder="Username"  name="username"><br><br>         
        <!--Password-->
        <input style="border-radius: 8px" type="password" placeholder="Password"  name="password" id="Show_Pass"><br><br>
        <!--Show password-->
        <input type="checkbox" onclick="ShowPassword()">
        <label for="show" style="font-size: 10px;"><b> Show Password</b></label>
        <br><br>
        <!--Submit button-->
        <button type="submit" class="btn" name="login_user" style="width: 300px; background-color: #1E90FC; border: transparent; border-radius: 8px;">Login</button>
      </div>
	</form>
</div>

    <script>
  function ShowPassword() {
    var x = document.getElementById("Show_Pass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  </script>
</body>

</html>
