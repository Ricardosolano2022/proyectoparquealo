<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>INICIO SESION</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="caja">
                <img src="Imagenes/logoParking3.png" alt="Logo del parqueadero">
                <nav >
                    <ul>
                        <li><a href="paginaPrincipal.php">HOME</a></li>
                        <li><a>COCTACTOS</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="datos">
            <div class="container">
                <form>
                  <h2>Iniciar Sesión</h2>
                  <div class="input-group">
                    <label for="username">Email o Usuario</label>
                    <input type="text" id="username" name="username" required>
                  </div>
                  <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                  </div>
                  <button type="submit">Iniciar sesión</button>
                  <button >Registrar</button>

                </form>
              </div>
        </section>

    </body>
</html>