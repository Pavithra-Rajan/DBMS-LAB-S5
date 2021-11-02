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
@WebServlet("/Registration")

public class Registration extends HttpServlet{
	private static final long serialVersionUID = 1L;
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
		response.setContentType("text/html");
		PrintWriter out=response.getWriter();
		String Name=request.getParameter("Name");
		String Reg=request.getParameter("RegNo");
		String Email=request.getParameter("email");
		String Phone=request.getParameter("phone");
		String CGPA=request.getParameter("cgpa");
		//out.println(CGPA);
		
		if (Name.isEmpty() || Reg.isEmpty() || Email.isEmpty() || Phone.isEmpty() || CGPA.isEmpty()  || Phone.length()!=10 || Reg.length()!=9) {
			RequestDispatcher rd =request.getRequestDispatcher("index.jsp");
			out.println("<font color=red> Fill all the fields</font>");
			rd.include(request, response);
			
		} else {
			try {
				Class.forName("com.mysql.cj.jdbc.Driver");
				Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/placements","root", "root123");
				if(con==null) {
					out.println("Not Connected");
				}
				
				String query = "insert into student (Name, RegNo, Email, Phone, CGPA) values (?,?,?,?,?)";
				PreparedStatement ps=con.prepareStatement(query);
				ps.setString(1,Name);
				ps.setString(2,Reg);
				ps.setString(3,Email);
				ps.setString(4,Phone);
				ps.setString(5,CGPA);
				
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
