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
<h2 align="center"><font><strong>Companies coming for the drive</strong></font></h2>
<table align="center" cellpadding="5" cellspacing="5" border="1">
<tr>

</tr>
<tr bgcolor="#046ab8">
<td><b>S.L No</b></td>
<td><b>Company</b></td>
<td><b>Role</b></td>
<td><b>CTC</b></td>

</tr>
<%
try{ 
connection = DriverManager.getConnection(connectionUrl+dbName, userId, password);
statement=connection.createStatement();
String sql ="SELECT * FROM company";

resultSet = statement.executeQuery(sql);
while(resultSet.next()){
%>
<tr bgcolor="#73baf0">

<td><%=resultSet.getString("C_ID") %></td>
<td><%=resultSet.getString("Name") %></td>
<td><%=resultSet.getString("Role") %></td>
<td><%=resultSet.getString("CTC") %></td>


</tr>

<% 
}

} catch (Exception e) {
e.printStackTrace();
}
%>
</table>
<br>
