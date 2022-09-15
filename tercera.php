<?php
session_start();
$_SESSION['username'] = $_COOKIE["username"];
$_SESSION['userpass'] = $_COOKIE["userpass"];
$_SESSION['phone'] = $_COOKIE["phone"];
$_SESSION['authuser'] = 0;
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
  <title>Find my Favorite Movie!</title>
 </head>
 <body>
<?php
echo "<a href='principal.php'>";
echo "Go to the main page!"; 
echo "</a>";
?>
 </body>
</html>
<html>
 <head>
  <title>How many days in this month?</title>
 </head>
 <body>
<?php
date_default_timezone_set('America/New_York');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }

$back = urlencode("Vienes de la pagina 3");
echo "<a href='principal.php?vuelta=$back'>";
echo "volver"; 
echo "</a>";
?>
 </body>
</html>


