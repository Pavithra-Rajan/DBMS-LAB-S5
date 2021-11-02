package com.demo.app;
import java.sql.Statement;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

//@SuppressWarnings("serial")
@WebServlet("/Login")

public class Login extends HttpServlet{
	private static final long serialVersionUID = 1L;
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
		response.setContentType("text/html");
		PrintWriter out=response.getWriter();
		String RegNo=request.getParameter("RegNo");
		String Phone=request.getParameter("phone");
	
		//out.println(CGPA);
		
		if (RegNo.isEmpty() || Phone.isEmpty()) {
			RequestDispatcher rd =request.getRequestDispatcher("login.jsp");
			out.println("<font color=red> Fill all the fields</font>");
			rd.include(request, response);
			
		} else {
			try {
				Class.forName("com.mysql.cj.jdbc.Driver");
				Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/placements","root", "root123");
				if(con==null) {
					out.println("Not Connected");
				}
				
				
				Statement stmt=con.createStatement();
			
				
				
				ResultSet rs = stmt.executeQuery("select * from student where RegNo ='"+RegNo+"' and Phone='"+Phone+"'");
				System.out.println(rs);
				
			    out.print("Name: "+rs.getString("Name")+", ");
			    System.out.print("Registration Number: "+rs.getString("RegNo")+",");
			    System.out.print("Email: "+rs.getString("Email"));
			    System.out.println();
			      
				//out.println("After : " + ps.getString());
				stmt.close();
				con.close();
				
			} catch (Exception e) {
				e.printStackTrace();
				
			}
			//RequestDispatcher rd =request.getRequestDispatcher("home.jsp");
			//rd.forward(request, response);
		}
	}

}
