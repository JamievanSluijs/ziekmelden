<!DOCTYPE html>

<html>
	<head>
		<title>Overzicht</title>
		<link rel="stylesheet" href="ziekmeld.css">
	</head>
	<nav>
		<ul class="sidenav" >
			<li><a href="ziekmelden.php">Ziekmelden</a></li>
			<li><a href="betermelden.php">betermelden</a></li>	
			<li><a href="overzicht.php">overzicht</a></li>
			<li><a href="overzichtbetergemeld.php">Betergemeldoverzicht</a></li>
		</ul>	
	</nav>
	
<?PHP include("ziekmelddata.php");
$query = "SELECT * FROM betergemeld";	
 $stm = $con->prepare($query);
 if($stm->execute()){
	$result = $stm->fetchAll(PDO::FETCH_OBJ);
		echo "<div class='ovm'>";
		echo "<h1>Betergemelden</h1>";
		echo"</div>";
	foreach($result as $pers){
		echo "<div class='ovm'>";
		echo "<p>$pers->naam</p>";
		echo "<textarea id='huts' name='huts'>"."$pers->sid"."$pers->klas"."</textarea>";
		echo"</div>";
	}
}