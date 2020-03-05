<?php
/* Name:Fahim Zubaer
 Course: CNT 4714 – Fall 2017 
 Assignment title: A Three-Tier Distributed Web-Based Application Using PHP and Apache
 Due Date: December 3, 2017
*/


session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    </head>
	
    <body bgcolor="black">
        <header style="text-align:center; color:red;">
            <h1>CNT 4714 - Project Five Database Client</h1>
        </header>

        <div id="middle" style="width: auto;height: 1000px; ">
        <div id="center" style="width: 1000px;margin-left: auto;margin-right: auto;">
        <hr />
            <div id="l-middle" style="float: left;">
                <form method="post" action="authenticator.php">
                    <table style="font-size:18px; font-weight:bold; color:yellow;">
                        <tr>
                            <td><label for="username">Username </label></td>
						</tr>
						<tr>
                            <td><input type="textbox" id="username" name="username" style="width: 150px;"/></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password </label></td>
						</tr>
						<tr>
                            <td><input type="password" id="password" name="password" style="width: 150px;"/></td>
						<tr></tr><tr></tr>
						<tr>
							<td><input type="submit" id="submit;" name="submit" value="Login" style="width:75; height:25px; background-color:red; color:white; text-align:left; border:none"/></td>
						</tr>
					</table>
					

                </form>
            </div>

			<!--END OF L-MIDDLE-->
			
            <div id="middle" style="float: right; color:yellow;">
			
                <h2 style="color: lime">Welcome to the Database Client</h2>
                <p>This system will allow any registered user to run SQL queries and update<br>statements on the database shown below, onec login to the system<br>is successful.</p>
                <h2 style="color: lime">Database Connection:</h2>
                <p>Connection is to the MySQL Database named: localhost:3306/project5</p>
                <h2 style="color: lime">System Features</h2>
					<ul>
                    <li>User Authentication</li>
                    <li>Select Query</li>
                    <li>Update Query</li>
                    <li>Business Logic Implementation</li>
                    <li>Results Page</li>
                    <li>Error Checking</li>
                </ul>
                <h2 style="color: lime">User Login</h2>
                <p>Client login to the system uses the login area on the upper left</p>
                <ul>
                    <li><b>Username:</b> "root", "client1", or "client2"</li>
                    <li><b>Password: </b> "root", "red", or "blue"</li>


                </ul>
            </div>
			
            <div id='footer' style='clear:both; color:blue; text-align:center;'>
                <hr />
				<p>&copy; MJL &nbsp CNT 4717 PHP-based Database Client</p>
            </div>
            </div> 
        </div>
    </body>
</html>