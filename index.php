<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Inico de Sesión</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Crea tu cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>o use su correo electrónico para registrarse</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Registrate</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Accede con</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>o use su Email o Password</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Olvidaste tu contraseña</a>
                <button>Acceder</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido de nuevo!</h1>
                    <p>Ingrese sus datos personales para usar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Acceder</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bienvenido Alumno o Docente</h1>
                    <p>Registrate con tus datos personales para usar todas las funciones del sitio</p>
                    <button class="hidden" id="register">Registro</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/scripts/script.js"></script>
</body>

</html>