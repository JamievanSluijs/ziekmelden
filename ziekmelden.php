<!DOCTYPE html>

<html>
	<head>
		<title>Ziekmelden</title>
		<link rel="stylesheet" href="ziekmeld.css">
	</head>
	<nav>
		<ul class="sidenav" >
			<li><a href="ziekmelden.php">Ziekmelden</a></li>
			<li><a href="overzicht.php">overzicht</a></li>			
		</ul>	
	</nav>
<form method= "POST">
Naam:<input type="text" name="naam"></br>
Klas:<input type="text" name="klas"></br>
ziekte:<input type="text" name="ziekte"></br>
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
				if(empty($_POST['ziekte'])){
                    echo "U bent de ziekte van de student vergeten!!";
                }
                else{
					$naam = $_POST['naam'];
					$klas = $_POST['klas'];
					$ziekte = $_POST['ziekte'];
					$query = "INSERT INTO student VALUES(0,'$naam','$klas','$ziekte')";
					echo $query;
					$stm = $con->prepare($query);
					if($stm->execute()){
						echo "Student toegevoegd!!";
					}
					else{
						echo "niet gelukt!!";
					}
                }
			
			}	
?>			