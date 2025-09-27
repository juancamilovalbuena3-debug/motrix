<?php
include("db.php");
require('fpdf.php');

$busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : "";
$sqlFiltro = $busqueda ? "WHERE nombre LIKE '%$busqueda%' OR email LIKE '%$busqueda%'" : "";

$result = mysqli_query($conn, "SELECT * FROM empleados $sqlFiltro");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

// Cabecera
$pdf->Cell(10,10,'ID',1);
$pdf->Cell(40,10,'Nombre',1);
$pdf->Cell(40,10,'Puesto',1);
$pdf->Cell(30,10,'Salario',1);
$pdf->Cell(60,10,'Email',1);
$pdf->Ln();

$pdf->SetFont('Arial','',12);
while($row = mysqli_fetch_assoc($result)){
    $pdf->Cell(10,10,$row['id'],1);
    $pdf->Cell(40,10,$row['nombre'],1);
    $pdf->Cell(40,10,$row['puesto'],1);
    $pdf->Cell(30,10,$row['salario'],1);
    $pdf->Cell(60,10,$row['email'],1);
    $pdf->Ln();
}

$pdf->Output('D','empleados.pdf');
exit();
?>
