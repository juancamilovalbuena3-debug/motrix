<?php
include("db.php");

$busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : "";
$sqlFiltro = $busqueda ? "WHERE nombre LIKE '%$busqueda%' OR email LIKE '%$busqueda%'" : "";

$result = mysqli_query($conn, "SELECT * FROM empleados $sqlFiltro");

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=empleados.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['ID','Nombre','Puesto','Salario','Email']);

while($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}

fclose($output);
exit();
?>
