<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Enterprise SST</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #1C2437; /* Fondo azul oscuro */
            color: #EFEBDF; /* Texto color crema */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background-color: #47485A; /* Fondo gris azulado oscuro */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .login-container h2 {
            color: #EFEBDF;
        }
        .logo-enterprise {
            max-width: 200px;
            margin-bottom: 20px;
        }
        .logo-auxiliary {
            max-width: 80px;
            margin: 10px;
            padding: 10px;
            background-color: #FFFFFF; /* Fondo blanco para los logos auxiliares */
            border-radius: 5px;
        }
        .btn-custom {
            background-color: #B89553; /* Botón dorado */
            border: none;
            color: #1C2437;
        }
        .btn-custom:hover {
            background-color: #BD9851; /* Botón dorado más claro */
        }
        .form-control, .form-control:focus {
            background-color: #1C2437;
            border-color: #B89553;
            color: #EFEBDF;
        }
        .form-control::placeholder {
            color: #B89553;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-container">
        
        <!-- Logo principal -->
        <img src="<?= base_url('uploads/logo_enterprisesst.jpeg') ?>" alt="Enterprise SST" class="logo-enterprise">

        <!-- Logo auxiliares con fondo blanco -->
        <div class="d-flex justify-content-center">
            <img src="<?= base_url('uploads/logocycloid.png') ?>" alt="Cycloid" class="logo-auxiliary">
            <img src="<?= base_url('uploads/logosst.png') ?>" alt="SST" class="logo-auxiliary">
        </div>

        <h2>Login</h2>

        <!-- Mensaje de error -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <!-- Formulario de login -->
        <form action="<?= base_url('/loginPost') ?>" method="post">
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="username" class="form-control" placeholder="Ingrese su correo" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña" required>
            </div>

            <div class="form-group">
                <label for="role">Rol:</label>
                <select name="role" class="form-control" required>
                    <option value="client">Cliente</option>
                    <option value="consultant">Consultor</option>
                </select>
            </div>

            <button type="submit" class="btn btn-custom btn-block">Login</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
