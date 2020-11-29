<?php
$servername = "mysql.omega:3306";
$username = "projektmunka10";
$password = "nnmbbUv7Qibi3DS_";

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'projektmunka10');


if (isset($_POST["muvesz"])) {
    $muvesz = $_POST["muvesz"];
    if (!empty($muvesz)) {
        $muveszQ = "muvesz LIKE '%{$muvesz}%' AND";
    }
}
if (isset($_POST["cim"])) {
    $cim = $_POST["cim"];
    if (!empty($cim)) {
        $cimQ = "cim LIKE '%{$cim}%' AND";
    }
}
if (isset($_POST["min"])) {
    $min = $_POST["min"];
}
if (isset($_POST["max"])) {
    $max = $_POST["max"];
}
if (!empty($min) && !empty($max)) {
    if ($min == $max) {
        $keletkezeseve = "keletkezeseve = '{$min}'";
    } else {
        $keletkezeseve = "keletkezeseve BETWEEN '{$min}' AND '{$max}'";
    }
} else {
    $keletkezeseve = "keletkezeseve BETWEEN 1800 AND 1999";
}
if (isset($_POST["stilus"])) {
    $stilus = $_POST["stilus"];
    if (!empty($stilus)) {
        $stilusQ = "AND stilus LIKE '%{$stilus}%'";
    }
}
if (isset($_POST["anyag"])) {
    $anyag = $_POST["anyag"];
    if (!empty($anyag)) {
        $anyagQ = "AND anyag LIKE '%{$anyag}%'";
    }
}
if (isset($_POST["meretx"])) {
    $meretx = $_POST["meretx"];
    if (!empty($meretx)) {
        $meretxQ = "AND meretx <= '{$meretx}'";
    }
}
if (isset($_POST["merety"])) {
    $merety = $_POST["merety"];
    if (!empty($merety)) {
        $meretyQ = "AND merety <= '{$merety}'";
    }
}

$where = $muveszQ . ' ' . $cimQ . ' ' . $keletkezeseve . ' ' . $keletkezeseveQ . ' ' . $stilusQ . ' ' . $anyagQ . ' ' . $meretxQ . ' ' . $meretyQ;
//echo $where;
$output = '';

if (!empty($where)) {
    //$where = mysqli_real_escape_string($conn, $where);
    $query = "SELECT muvesz, cim, keletkezeseve, stilus, anyag, meretx, merety FROM `festmeny` WHERE " .  $where . "ORDER BY keletkezeseve";
    echo $query;
} else {
    $query = "SELECT muvesz, cim, keletkezeseve, stilus, anyag, meretx, merety FROM `festmeny` ORDER BY keletkezeseve;
    ";
}

mysqli_free_result($result);
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '<table class="table3">
                        <tr>
                            <th>Művész</th>
                            <th>cím</th>
                            <th>éve</th>
                            <th>stílus</th>
                            <th>anyag</th>
                            <th>magasság</th>
                            <th>szélesség</th>
                        </tr>';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
            <tr>
                <td>' . $row["muvesz"] . '</td>
                <td>' . $row["cim"] . '</td>
                <td>' . $row["keletkezeseve"] . '</td>
                <td>' . $row["stilus"] . '</td>
                <td>' . $row["anyag"] . '</td>
                <td>' . $row["meretx"] . ' cm</td>
                <td>' . $row['merety'] . ' cm</td>
            </tr>
        ';
    }
    $output .= '</table>';

    echo $output;
} else {
    echo 'Data Not Found';
}
