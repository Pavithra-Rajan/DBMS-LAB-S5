<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*,java.util.*"%>
<%
	String Name=request.getParameter("Name");
	String Reg=request.getParameter("RegNo");
	String Email=request.getParameter("email");
	String Phone=request.getParameter("phone");
	String CGPA=request.getParameter("cgpa");
	try
	{
	Class.forName("com.mysql.jdbc.Driver");
	Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/placements", "root", "root123");
	Statement st=conn.createStatement();
	int i=st.executeUpdate("insert into student values (?,?,?,?,?)");
	out.println("Thank you for register");
	}
	catch(Exception e)
	{
	System.out.print(e);
	e.printStackTrace();
}
%>

