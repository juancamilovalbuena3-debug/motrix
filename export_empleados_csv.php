<?php 
include("db.php");

// Obtener búsqueda
$busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : "";
$sqlFiltro = $busqueda ? "WHERE nombre LIKE '%$busqueda%' OR email LIKE '%$busqueda%'" : "";

// Consulta a la base de datos
$result = mysqli_query($conn, "SELECT * FROM empleados $sqlFiltro");

// Encabezados para forzar descarga CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=empleados.csv');

// Crear archivo de salida
$output = fopen('php://output', 'w');

// Encabezado de columnas
fputcsv($output, ['ID','Nombre','Puesto','Salario','Email']);

// Datos de cada fila
while($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $row['id'],
        $row['nombre'],
        $row['puesto'],
        $row['salario'],
        $row['email']
    ]);
}

// Cerrar archivo de salida
fclose($output);
exit();
?>
