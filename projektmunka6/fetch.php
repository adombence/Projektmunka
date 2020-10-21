<?php

$servername = "127.0.0.1";
$username = "root";
$password = null;

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'projektmunka6');
$output = '';
if (isset($_POST["query"])) {
	$search = mysqli_real_escape_string($conn, $_POST["query"]);

	$query = "
	SELECT konyv.id, konyv.cim, konyv.ISBN, konyv.kiadasiDatum, konyv.oldalSzam, konyv.eredetiNyelv
	FROM konyv, kapcsolo, szerzo
	WHERE cim LIKE '%" . $search . "%'
	OR ISBN LIKE '%" . $search . "%' 
	OR kiadasiDatum LIKE '%" . $search . "%' 
	OR oldalSzam LIKE '%" . $search . "%' 
	OR eredetiNyelv LIKE '%" . $search . "%';
	";

	$query2 = "
	SELECT konyv.id, konyv.cim, konyv.ISBN, konyv.kiadasiDatum, konyv.oldalSzam, konyv.eredetiNyelv
	FROM konyv, kapcsolo, szerzo
	WHERE konyv.id = kapcsolo.konyvid AND szerzo.id = kapcsolo.szerzoid AND szerzo.nev LIKE '%" . $search . "%';
	";
} else {
	$query = "SELECT * FROM `konyv` ORDER BY id";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>cím</th>
							<th>ISBN</th>
							<th>kiadási dátum</th>
							<th>oldalszám</th>
							<th>eredeti nyelv</th>
						</tr>';
	while ($row = mysqli_fetch_array($result)) {
		$output .= '
			<tr>
				<td>' . $row["cim"] . '</td>
				<td>' . $row["ISBN"] . '</td>
				<td>' . $row["kiadasiDatum"] . '</td>
				<td>' . $row["oldalSzam"] . '</td>
				<td>' . $row["eredetiNyelv"] . '</td>
			</tr>
		';
	}
	echo $output;
} elseif (mysqli_num_rows($result2) > 0) {
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>cím</th>
							<th>ISBN</th>
							<th>kiadási dátum</th>
							<th>oldalszám</th>
							<th>eredeti nyelv</th>
						</tr>';
	while ($row = mysqli_fetch_array($result)) {
		$output .= '
			<tr>
				<td>' . $row["cim"] . '</td>
				<td>' . $row["ISBN"] . '</td>
				<td>' . $row["kiadasiDatum"] . '</td>
				<td>' . $row["oldalSzam"] . '</td>
				<td>' . $row["eredetiNyelv"] . '</td>
			</tr>
		';
	}
	echo $output;
} else {
	echo 'Nincs ilyen adat';
}
