<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.Connection"%>
<style>
.container {
  padding: 16px;
  margin: auto;
  width: 43%;
  background-color: #73baf0;
  text-align:center;
}
</style>
<%
String id = request.getParameter("userId");
String driverName = "com.mysql.cj.jdbc.Driver";
String connectionUrl = "jdbc:mysql://localhost:3306/";
String dbName = "placements";
String userId = "root";
String password = "root123";

try {
Class.forName(driverName);
} catch (ClassNotFoundException e) {
e.printStackTrace();
}

Connection connection = null;
Statement statement = null;
ResultSet resultSet = null;
%>
<h2 align="center"><font><strong>Student Details</strong></font></h2>
<table align="center" cellpadding="5" cellspacing="5" border="1">
<tr>

</tr>
<tr bgcolor="#046ab8">
<td><b>Name</b></td>
<td><b>Reg No.</b></td>
<td><b>Email</b></td>
<td><b>Phone</b></td>
<td><b>CGPA</b></td>
<td><b>Status</b></td>
</tr>
<%
try{ 
connection = DriverManager.getConnection(connectionUrl+dbName, userId, password);
statement=connection.createStatement();
String sql ="SELECT * FROM student";

resultSet = statement.executeQuery(sql);
while(resultSet.next()){
%>
<tr bgcolor="#73baf0">

<td><%=resultSet.getString("Name") %></td>
<td><%=resultSet.getString("RegNo") %></td>
<td><%=resultSet.getString("Email") %></td>
<td><%=resultSet.getString("Phone") %></td>
<td><%=resultSet.getString("CGPA") %></td>
<td><%=resultSet.getString("status") %></td>

</tr>

<% 
}

} catch (Exception e) {
e.printStackTrace();
}
%>
</table>
<br>
<div class="container">
<a href="http://localhost:8080/PlacementApp/NewCompany.jsp"> Register a new company</a>
</div>
