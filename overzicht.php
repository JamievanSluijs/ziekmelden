<!DOCTYPE html>

<html>
	<head>
		<title>Overzicht</title>
		<link rel="stylesheet" href="ziekmelddata.php">
	</head>
	<nav>
		<ul class="sidenav" >
			<li><a href="ziekmelden.php">Ziekmelden</a></li>
			<li><a href="overzicht.php">overzicht</a></li>			
		</ul>	
	</nav>
	
	<?PHP include("ziekmelddata.php");
$query = "SELECT * FROM student";	
 $stm = $con->prepare($query);
 if($stm->execute()){
	$result = $stm->fetchAll(PDO::FETCH_OBJ);
		echo "<div class='ovm'>";
		echo "<h1>Ziekgemelden</h1>";
		echo"</div>";
	foreach($result as $pers){
		echo "<div class='ovm'>";
		echo "<p>$pers->naam</p>";
		echo "<textarea id='huts' name='huts'>"."$pers->sid"."$pers->klas"."$pers->ziekte"."</textarea>";
		echo"</div>";
	}
}