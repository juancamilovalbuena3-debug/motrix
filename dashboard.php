<?php
include("db.php");
session_start(); // Para manejo de sesión

// --- CRUD EMPLEADOS ---
if (isset($_POST['add'])) {
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $salario = $_POST['salario'];
    $email = $_POST['email'];

    $query = "INSERT INTO empleados (nombre, puesto, salario, email) VALUES ('$nombre','$puesto','$salario','$email')";
    mysqli_query($conn, $query);
    header("Location: dashboard.php?section=empleados");
    exit();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $salario = $_POST['salario'];
    $email = $_POST['email'];

    $query = "UPDATE empleados SET nombre='$nombre', puesto='$puesto', salario='$salario', email='$email' WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: dashboard.php?section=empleados");
    exit();
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM empleados WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: dashboard.php?section=empleados");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<div class="dashboard-container">
    <aside class="sidebar">
        <h2>Panel</h2>
        <ul>
            <li><a href="dashboard.php?section=inicio">Inicio</a></li>
            <li><a href="dashboard.php?section=empleados">Empleados</a></li>
            <li><a href="dashboard.php?section=carros">Carros</a></li>
            <li><a href="dashboard.php?section=motos">Motos</a></li>
            <li><a href="dashboard.php?section=config">Configuración</a></li>
            <li><a href="logout.php" style="color:red;">Cerrar sesión</a></li>
        </ul>
    </aside>

    <main class="content">
        <?php
        $section = isset($_GET['section']) ? $_GET['section'] : "inicio";

        if ($section == "inicio") {
            echo "<h1>Bienvenido al Dashboard</h1><p>Selecciona una sección desde el menú.</p>";
        }

        if ($section == "empleados") {
            echo "<h1>Gestión de Empleados</h1>";

            // FILTRO Y PAGINACIÓN
            $busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : "";
            $limite = 5;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $inicio = ($pagina - 1) * $limite;
            $sqlFiltro = $busqueda ? "WHERE nombre LIKE '%$busqueda%' OR email LIKE '%$busqueda%'" : "";

            $totalRes = mysqli_query($conn, "SELECT COUNT(*) as total FROM empleados $sqlFiltro");
            $total = mysqli_fetch_assoc($totalRes)['total'];
            $paginas = ceil($total / $limite);

            $result = mysqli_query($conn, "SELECT * FROM empleados $sqlFiltro LIMIT $inicio, $limite");

            // FORMULARIO DE BÚSQUEDA Y EXPORTACIÓN
            ?>
            <form method="GET" class="form" style="margin-bottom:15px;">
                <input type="hidden" name="section" value="empleados">
                <input type="text" name="busqueda" placeholder="Buscar por nombre o email" value="<?= htmlspecialchars($busqueda) ?>">
                <button type="submit">Buscar</button>
                <a href="dashboard.php?section=empleados" style="margin-left:10px;">Limpiar</a>
                <a href="export_empleados_csv.php?busqueda=<?= urlencode($busqueda) ?>" style="margin-left:20px; color:green; font-weight:bold;">Exportar CSV</a>
                <a href="export_empleados_pdf.php?busqueda=<?= urlencode($busqueda) ?>" style="margin-left:10px; color:blue; font-weight:bold;">Exportar PDF</a>
            </form>
            <?php

            // FORMULARIO AGREGAR/EDITAR
            if (isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $res = mysqli_query($conn, "SELECT * FROM empleados WHERE id=$id");
                $emp = mysqli_fetch_assoc($res);
                ?>
                <form method="POST" class="form">
                    <input type="hidden" name="id" value="<?= $emp['id'] ?>">
                    <input type="text" name="nombre" value="<?= $emp['nombre'] ?>" required>
                    <input type="text" name="puesto" value="<?= $emp['puesto'] ?>" required>
                    <input type="number" step="0.01" name="salario" value="<?= $emp['salario'] ?>" required>
                    <input type="email" name="email" value="<?= $emp['email'] ?>" required>
                    <button type="submit" name="update">Actualizar</button>
                </form>
                <?php
            } else {
                ?>
                <form method="POST" class="form">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="text" name="puesto" placeholder="Puesto" required>
                    <input type="number" step="0.01" name="salario" placeholder="Salario" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <button type="submit" name="add">Agregar</button>
                </form>
                <?php
            }

            // LISTADO DE EMPLEADOS
            echo "<table class='tabla'>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Puesto</th><th>Salario</th><th>Email</th><th>Acciones</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['puesto']}</td>
                        <td>{$row['salario']}</td>
                        <td>{$row['email']}</td>
                        <td>
                            <a href='dashboard.php?section=empleados&edit=$id'>Editar</a> | 
                            <a href='dashboard.php?section=empleados&delete=$id' onclick='return confirm(\"¿Eliminar este empleado?\")'>Eliminar</a>
                        </td>
                      </tr>";
            }
            echo "</table>";

            // PAGINACIÓN
            echo "<div style='margin-top:15px;'>";
            for ($i = 1; $i <= $paginas; $i++) {
                if ($i == $pagina) {
                    echo "<strong> $i </strong>";
                } else {
                    echo "<a href='dashboard.php?section=empleados&pagina=$i&busqueda=$busqueda'> $i </a>";
                }
            }
            echo "</div>";
        }

        if ($section == "carros") {
            echo "<h1>Gestión de Carros</h1><p>Aquí puedes manejar los carros.</p>";
        }

        if ($section == "motos") {
            echo "<h1>Gestión de Motos</h1><p>Aquí puedes manejar las motos.</p>";
        }

        if ($section == "config") {
            echo "<h1>Configuración</h1><p>Opciones de configuración del sistema.</p>";
        }
        ?>
    </main>
</div>
</body>
</html>
