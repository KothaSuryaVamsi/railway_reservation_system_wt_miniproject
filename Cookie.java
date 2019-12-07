import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class Cookie extends HttpServlet{
public void doPost(HttpServletRequest req,HttpServletResponse res)throws ServletException,IOException
{
res.setContentType("text/html");
PrintWriter out=res.getWriter();
Cookie cookie1=new Cookie("vamsii","vamsii");
Cookie cookie2=new Cookie("suryaa","suryaa");
Cookie cookie3=new Cookie("santhu","santhu");
Cookie cookie4=new Cookie("asritha","asritha");
res.addCookie(cookie1);
res.addCookie(cookie2);
Cookie cookies[];
cookies=req.getCookies();
String name=req.getParameter("login");
String pwd=req.getParameter("pwd");
int flag=0;
out.println("<html><body>");
if(cookies!=null && cookies.length!=0)
{
for(int i=0;i<cookies.length;i++)
{
if(name.equals(cookies[i].getName()))
if(pwd.equals(cookies[i].getValue()))
flag=1;
}
if(flag==1)
out.println("<h1>Welcome to </h1>"+name);
else
out.println("<h1>you are not authorized</h1>");
}
else
out.println("<h1>there are no cookies...</h1>");
out.println("</body></html>");
}
}