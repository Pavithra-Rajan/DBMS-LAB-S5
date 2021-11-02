package com.demo.app;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;


import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

//@SuppressWarnings("serial")
@WebServlet("/RegistrationCompany")

public class RegistrationCompany extends HttpServlet{
	private static final long serialVersionUID = 1L;
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
		response.setContentType("text/html");
		PrintWriter out=response.getWriter();
		String Name=request.getParameter("Name");
		String Role=request.getParameter("Role");
		String CTC=request.getParameter("CTC");
		//out.println(CGPA);
		
		if (Name.isEmpty() || Role.isEmpty() || CTC.isEmpty()) {
			RequestDispatcher rd =request.getRequestDispatcher("NewCompany.jsp");
			out.println("<font color=red> Fill all the fields</font>");
			rd.include(request, response);
			
		} else {
			try {
				Class.forName("com.mysql.cj.jdbc.Driver");
				Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/placements","root", "root123");
				if(con==null) {
					out.println("Not Connected");
				}
				
				String query = "insert into company (Name, Role, CTC) values (?,?,?)";
				PreparedStatement ps=con.prepareStatement(query);
				ps.setString(1,Name);
				ps.setString(2,Role);
				ps.setString(3,CTC);
				
				
				ps.executeUpdate();
				//System.out.println(rs);
				out.println("Inserted to table");
				ps.close();
				con.close();
				
			} catch (Exception e) {
				e.printStackTrace();
				
			}
			RequestDispatcher rd =request.getRequestDispatcher("home.jsp");
			rd.forward(request, response);
		}
	}

}
