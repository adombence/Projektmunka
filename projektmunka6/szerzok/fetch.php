<?php

$servername = "mysql.omega:3306";
$username = "projektmunka6";
$password = "VAcSZf8QT3sqz7A";

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'projektmunka6');
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM szerzo 
	WHERE nev LIKE '%".$search."%'
	OR nem LIKE '%".$search."%' 
	OR szuletett LIKE '%".$search."%' 
	OR elhunyt LIKE '%".$search."%' 
	OR szarmazas LIKE '%".$search."%'
	OR szuletesihely LIKE '%".$search."%'
	";
}
else
{
	$query = "SELECT * FROM `szerzo` ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>név</th>
							<th>nem</th>
							<th>született</th>
							<th>elhunyt</th>
							<th>származás</th>
							<th>születési hely</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		if($row['nem'] == 1){
			$nem = "férfi";
		} else{
			$nem = "nő";
		}
		$output .= '
			<tr>
				<td>'.$row["nev"].'</td>
				<td>'.$nem.'</td>
				<td>'.$row["szuletett"].'</td>
				<td>'.$row["elhunyt"].'</td>
				<td>'.$row["szarmazas"].'</td>
				<td>'.$row["szuletesihely"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Nincs ilyen adat';
}
