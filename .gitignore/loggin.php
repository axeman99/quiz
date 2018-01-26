<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logga in</title>
<style type="text/css"></style>
 <link href="style3.css" rel="stylesheet"></link>
</head>

<body>
<?php
if (isset($_POST['user']) && isset($_POST['pass']) && 
  !empty($_POST['user']) && !empty($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    include ('dbconnection.php');
$sql = "SELECT * FROM kunder WHERE user='$user' AND pass='$pass' ";
$stmt = $dbconn->prepare($sql);
$data = array();
$stmt->execute($data); 
$antalposter = $stmt -> rowCount();
if ($antalposter==1) {
header("Location:choose.php");
exit;
} else{
    echo "Fel användarnamn eller lösenord";
}
}
?>
<p class="auto"><a href="hem.html" >Quiz</a></p>

<div class="menu">
<nav>
<ul>
<a href="loggin.php" class="tjugo"><li>Logga in</li></a>
<a href="create.php" class="tjugo"><li>Skapa konto </li></a>
</ul>

 </nav>
 <br/>
 <br/>
 
<form method="post" action=""> 
<table> 
<tr>
<td>Användarnamn:</td>
<td><input type="text" name="user" size=40 maxlength=100>
</td>
</tr> 
<tr>
<td>Lösenord:</td>
<td><input type="text" name="pass" size=40 maxlength=100></td></tr> 

<td><button type="submit">Logga in</button></td></tr> 
</table> 
</form>
</div>
<footer>
	<p>&copy;Alexander & Axelelos</p>
</footer>
</body>
</html>
