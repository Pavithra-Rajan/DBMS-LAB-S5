<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>login</title>
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}
.heading
{
 text-align: center;
}
/* Add padding to containers */
.container {
  padding: 16px;
  margin: auto;
  width: 30%;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=tel],input[type=number]  {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=number]:focus{
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
  background-color: #046ab8;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<body>

	<div class="container">
	<div class="heading">
  	<h1>Log In</h1>
    <p>This is for Placement Co-ordinators only</p>
  </div>
	<form action="LoginAdmin2.jsp" method="post">
	User name :<input type="text" name="usr" /><br>
	Password :<input type="password" name="password" /><br>
	<button type="submit" class="registerbtn">Log In</button>
	 </form>
	</div>
</html>