<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FEEDBACK </title>
<link href="css/registration.css" rel="stylesheet" type="text/css" />

<body>
<div>

               
  <h1 align="center">IHD PIZZA.. FEEDBACK CORNER</h1>
  <body background="images/delivery_boy_animation.gif"></body>
  <div class="table">
<form action="insert.php" method="post">
    <p class="input-box">
        <label for="firstName"><b>First Name: </b></label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p class="input-box">
        <label for="lastName"><b>Last Name: </b></label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p class="input-box">
        <label for="emailAddress"><b>Email Address: </b></label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <p class="input-box">
        <label for="phoneNumber"><b>Phone Number: </b></label>
        <input type="tel" name="phoneNumber" id="phoneNumber">
    </p>
    <p class="input-box">
        <label for="feedback"><b>Feel free to say: </b></label>
        <input type="text" name="feedback" id="feedback">
    </p>
    <input type="submit" class="btnRegister" value="Submit">
  </div>
</form>
</body>
</html>