<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:admin.php");
}

?>


<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="admin.css">
    <title>It is a water biling system</title>
    
</head>
<body>
    
    <header>
    <center><h><font size = 40>Water Biling System</font></h></center>
    </header>
    <div class="main">
        <section>
            <center><img src="admin.png" alt="adminLogo" id="adminLogo width="80" height="80"><br><font size = 10>Admin</font>
            </center>
            <font size = 5>
                <ul>
                    <li> Dashboard </li>
                    <li> Clients </li>
                    <li> Bilings </li>
                    <form action="logout.php" method="POST"> 
                   <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button> 
                </form>
            
                </ul>

            </font>

            
        </section>
        <aside class ="right">
            <h1>
                <font size= 10 id="text">Dashboard</font>
            </h1>
        </aside>
    
    </div>

    <center><table>
        <caption><font size="5"><font color=blue> Users </font></font></caption>
        <tr>
            <th> Clients</th>
        </tr>
        <tr>
            <td> 15 </td>
        </tr>
        <tr> 
            <td> View </td>
        </tr>
    </table></center>
    <br>
    
    <center><table>
        <caption><font size="5"><font color="blue"> Pending Users </font></font> </caption>
        <tr>
            <th> Pending Users</th>
        </tr>
        <tr>
            <td> 5 </td>
        </tr>
        <tr> 
            <td> View </td>
        </tr>
    </table></center>
    

</body>
</html>

<?php
   if(isset($_post ['Logout']))
   {
     session_destroy();
     header("location:admin.php");

   }
?>