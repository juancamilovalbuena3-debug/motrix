<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motrix - Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Motrix</div>
    </nav>

    <div class="container">
        <form action="register.php" method="POST" class="login-form" onsubmit="return validarRegistro()">
            <h2>Crea tu cuenta en Motrix</h2>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="ejemplo@correo.com">

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" maxlength="8" placeholder="Máximo 8 caracteres">

            <label for="confirmar">Confirmar contraseña</label>
            <input type="password" id="confirmar" name="confirmar" maxlength="8" placeholder="Repite la contraseña">

            <button type="submit">Registrarse</button>
        </form>
    </div>

    <script>
        function validarRegistro() {
            let nombre = document.getElementById("nombre").value.trim();
            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();
            let confirmar = document.getElementById("confirmar").value.trim();

            if (nombre === "") {
                alert("Completar el campo: Nombre");
                return false;
            }
            if (email === "") {
                alert("Completar el campo: E-mail");
                return false;
            }
            if (password === "") {
                alert("Completar el campo: Contraseña");
                return false;
            }
            if (password.length > 8) {
                alert("La contraseña debe tener máximo 8 caracteres");
                return false;
            }
            if (confirmar === "") {
                alert("Completar el campo: Confirmar contraseña");
                return false;
            }
            if (password !== confirmar) {
                alert("Las contraseñas no coinciden");
                return false;
            }

            // Redirige al login si todo es válido
            window.location.href = "login.php";
            return false; // Evita que se recargue el formulario
        }
    </script>
</body>
</html>
