<html>
<head>
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 14px;
  background-color:lightblue;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=number] {
  width: 600;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: silver;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: lightgreen;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 400;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: lightblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

</head>
<body>

<form method="post" action="registration.php" align="center">
  <div class="container">
    <h1 style="color: limegreen;">Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email :</b></label></br>
    <input type="text" placeholder="Your email" name="email" id="email" required></br>

    <label for="psw"><b>Password :</b></label></br>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required></br>

    <label for="number"><b>Mobile Number :</b></label></br>
    
    <input type="number" placeholder="mobile number" name="number" required >
    <hr>

    <button type="submit" class="registerbtn" name="reg" value="register">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="index.html">Login</a>.</p>
  </div>
</form>

</body>
</html>