<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*,java.util.*"%>

<%

	
	String userid=request.getParameter("usr");
	session.putValue("userid",userid);
	String password=request.getParameter("password");
	Class.forName("com.mysql.cj.jdbc.Driver");
	java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/placements","root","root123");
	Statement st= con.createStatement();
	ResultSet rs=st.executeQuery("select * from admins where userid='"+userid+"' and password='"+password+"'");
	try{
	rs.next();
	if(rs.getString("password").equals(password) && rs.getString("userid").equals(userid))
	{
	//out.println("Welcome " +userid);
	response.sendRedirect("http://localhost:8080/PlacementApp/ViewAll.jsp");
	}
	else{
	out.println("Invalid password or username.");
	}
	
	
	
	
	}
	catch (Exception e) {
	e.printStackTrace();
	}
%>
<style>
p{
font-size:30px;
}
</style>
<p>Invalid password or username.</p>
