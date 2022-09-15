<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['authuser'] = 0;
setcookie("username","Joel",time()+30);
setcookie("userpass","root",time()+30);
setcookie("phone","6",time()+30);
$_SESSION['authuser'] = 1;


//Check username and password information
if (($_SESSION['username'] == 'Joel') and
    ($_SESSION['userpass'] == 'root' and
     $_SESSION['phone'] == 6)){
    $_SESSION['authuser'] = 1;
} else {
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();     
}
?>

<html>
 <head>
  <title>secundaria</title>
 </head>
 <body>
<?php
$usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'null';
echo "Tu usuario ha sido modificado a: ";
echo $usuario;
echo "<a href='tercera.php'>";
echo "<br>Next!"; 
echo "</a>";
?>
</body>
</html>

 
