<!DOCTYPE html>
<html lang="en">
<head>
<title>Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
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
 text-align:center;
  background-color: white;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
      width: 30%;
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
<form class="form-inline" method="post" action="search.jsp">
<label for="Dept"><b>Choose the Department to search: </b></label>
    <select name="dept" id="dept">
	  <option value="Sales">Sales</option>
	  <option value="Marketing">Marketing</option>
	  <option value="Finance">Finance</option>
	  <option value="HR">HR</option>
	</select>

<button type="submit" name="save" class="btn btn-primary">Search</button>
</form>
</div>
</body>
</html>