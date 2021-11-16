<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Employee App</title>
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
  <form action="Registration" method="post">
  <div class="container">
  <div class="heading">
  	<h1>Register</h1>
    <p>Please fill in this form.</p>
  </div>
    
    <hr>
	<label for="Employee ID"><b>Employee ID</b></label>
    <input type="text" placeholder="Enter ID" name="ID" id="ID" maxlength="6" required>
    
    <label for="Name"><b>Employee Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" id="Name" required>
    
    
    <label for="Dept"><b>Employee Department</b></label>
    <select name="dept" id="dept">
	  <option value="Sales">Sales</option>
	  <option value="Marketing">Marketing</option>
	  <option value="Finance">Finance</option>
	  <option value="HR">HR</option>
	</select>
     <br>
      <br>
    <label for="Des"><b>Employee Designation</b></label>
    <input type="text" placeholder="Enter Designation" name="Des" id="Des" required>
    
    
    <label for="Sal"><b>Enter Salary</b></label>
    <input type="number" placeholder="Enter Salary" name="Sal" id="Sal" min="20000" step=".01" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
</form>

</body>
</html>