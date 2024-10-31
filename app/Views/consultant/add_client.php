<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Agregar Nuevo Cliente</h2>
            <a href="<?= base_url('/listClients') ?>" class="btn btn-primary">Ver Lista de Clientes</a>
        </div>

        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-body">
                <form action="<?= base_url('/addClientPost') ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">Fecha Inicio del Contrato:</label>
                        <input type="date" name="fecha_ingreso" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nit Cliente:</label>
                        <input type="text" name="nit_cliente" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre del Tercero (Como está en el RUT):</label>
                        <input type="text" name="nombre_cliente" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Usuario:</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo del Cliente:</label>
                        <input type="email" name="correo_cliente" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono 1:</label>
                        <input type="text" name="telefono_1_cliente" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono 2:</label>
                        <input type="text" name="telefono_2_cliente" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Dirección:</label>
                        <input type="text" name="direccion_cliente" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Persona de Contacto para Compras:</label>
                        <input type="text" name="persona_contacto_compras" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Código de Actividad Económica:</label>
                        <input type="text" name="codigo_actividad_economica" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre del Representante Legal:</label>
                        <input type="text" name="nombre_rep_legal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cédula del Representante Legal:</label>
                        <input type="text" name="cedula_rep_legal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha Fin de Contrato:</label>
                        <input type="date" name="fecha_fin_contrato" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ciudad del Cliente:</label>
                        <input type="text" name="ciudad_cliente" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Estado:</label>
                        <select name="estado" class="form-select" required>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                            <option value="pendiente">Pendiente</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ID Consultor:</label>
                        <select name="id_consultor" class="form-select" required>
                            <option value="1" selected>Seleccione un Consultor</option>
                            <?php foreach ($consultants as $consultant) : ?>
                                <?php if ($consultant['id_consultor'] != 1) : ?>
                                    <option value="<?= $consultant['id_consultor'] ?>"><?= $consultant['nombre_consultor'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Logo:</label>
                        <input type="file" name="logo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Firma del Representante Legal:</label>
                        <input type="file" name="firma_representante_legal" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Estándares:</label>
                        <select name="estandares" class="form-select">
                            <option value="7A">7A</option>
                            <option value="7B">7B</option>
                            <option value="7C">7C</option>
                            <option value="7D">7D</option>
                            <option value="7E">7E</option>
                            <option value="21A">21A</option>
                            <option value="21B">21B</option>
                            <option value="21C">21C</option>
                            <option value="21D">21D</option>
                            <option value="21E">21E</option>
                            <option value="60A">60A</option>
                            <option value="60B">60B</option>
                            <option value="60C">60C</option>
                            <option value="60D">60D</option>
                            <option value="60E">60E</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Agregar Cliente</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
