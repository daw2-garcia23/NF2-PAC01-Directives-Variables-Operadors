<html>
 <head>
  <title>Please Log In</title>
 </head>
 <body>
  <form method="post" action="secundaria.php">
   <p>Enter your username: 
    <input type="text" name="user"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>Enter one number: 
    <input type="number" name="phone"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
<?php
if (isset($_GET['vuelta'])){
echo $_GET['vuelta'];
}
?>
 </body>
</html>

