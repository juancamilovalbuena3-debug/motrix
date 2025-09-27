<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motrix - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Motrix</div>
    </nav>

    <div class="container">
        <h2>Ingresa tu e-mail y contraseña para iniciar sesión</h2>

        <form action="login.php" method="POST" class="login-form" onsubmit="return validarFormulario()">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo">

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" maxlength="8" placeholder="Máximo 8 caracteres">

            <button type="submit">Continuar</button>
            <a href="register.php" class="register-link">Crear cuenta</a>
        </form>
    </div>

    <script>
        function validarFormulario() {
            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();

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

            // Si pasa la validación, redirige al dashboard
            window.location.href = "dashboard.php";
            return false; // evita recargar login.php
        }
    </script>
</body>
</html>
