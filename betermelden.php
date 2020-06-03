<!DOCTYPE html>

<html>
	<head>
		<title>Ziekmelden</title>
		<link rel="stylesheet" href="ziekmeld.css">
	</head>
	<nav>
		<ul class="sidenav" >
			<li><a href="ziekmelden.php">Ziekmelden</a></li>
			<li><a href="betermelden.php">betermelden</a></li>	
			<li><a href="overzicht.php">overzicht</a></li>
            <li><a href="overzichtgemeld.php">Betergemeldoverzicht</a></li>			
			
		</ul>	
	</nav>
<form method= "POST">
Naam:<input type="text" name="naam"></br>
Klas:<input type="text" name="klas"></br>

<input type="submit" name="verstuur"></button>
</form>

<?PHP
include('ziekmelddata.php'); 
	if(isset($_POST['verstuur']))
            {
                if(empty($_POST['naam'])){
                    echo "U bent de naam van de student vergeten!!";
				}	
				if(empty($_POST['klas'])){
					echo "U bent de klas van de student vergeten!!";
                }
				
                else{
					$naam = $_POST['naam'];
					$klas = $_POST['klas'];
					$query = "INSERT INTO betergemeld VALUES(0,'$naam','$klas')";
					echo $query;
					$stm = $con->prepare($query);
					if($stm->execute()){
						echo "Student is beter gemeld!!";
					}
					else{
						echo "niet gelukt!!";
					}
                }
			
			}	
?>