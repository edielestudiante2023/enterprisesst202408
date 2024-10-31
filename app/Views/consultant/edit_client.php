<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
</head>

<body style="background-color: #f8f9fa;">
    <div class="container mt-5">
        <h2 class="mb-4">Editar Cliente</h2>

        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/updateClient/' . $client['id_cliente']) ?>" method="post" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label class="form-label">Fecha de Ingreso:</label>
                <input type="date" name="fecha_ingreso" value="<?= $client['fecha_ingreso'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">NIT Cliente:</label>
                <input type="text" name="nit_cliente" value="<?= $client['nit_cliente'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre Cliente:</label>
                <input type="text" name="nombre_cliente" value="<?= $client['nombre_cliente'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Usuario:</label>
                <input type="text" name="usuario" value="<?= $client['usuario'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Correo Cliente:</label>
                <input type="email" name="correo_cliente" value="<?= $client['correo_cliente'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono 1:</label>
                <input type="text" name="telefono_1_cliente" value="<?= $client['telefono_1_cliente'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono 2:</label>
                <input type="text" name="telefono_2_cliente" value="<?= isset($client['telefono_2_cliente']) ? $client['telefono_2_cliente'] : '' ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Dirección:</label>
                <input type="text" name="direccion_cliente" value="<?= $client['direccion_cliente'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Persona de Contacto para Compras:</label>
                <input type="text" name="persona_contacto_compras" value="<?= $client['persona_contacto_compras'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Código de Actividad Económica:</label>
                <input type="text" name="codigo_actividad_economica" value="<?= $client['codigo_actividad_economica'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre del Representante Legal:</label>
                <input type="text" name="nombre_rep_legal" value="<?= $client['nombre_rep_legal'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Cédula del Representante Legal:</label>
                <input type="text" name="cedula_rep_legal" value="<?= $client['cedula_rep_legal'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Fin de Contrato:</label>
                <input type="date" name="fecha_fin_contrato" value="<?= $client['fecha_fin_contrato'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Ciudad:</label>
                <input type="text" name="ciudad_cliente" value="<?= $client['ciudad_cliente'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Estado:</label>
                <select name="estado" class="form-select">
                    <option value="activo" <?= $client['estado'] == 'activo' ? 'selected' : '' ?>>Activo</option>
                    <option value="inactivo" <?= $client['estado'] == 'inactivo' ? 'selected' : '' ?>>Inactivo</option>
                    <option value="pendiente" <?= $client['estado'] == 'pendiente' ? 'selected' : '' ?>>Pendiente</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Consultor Asignado:</label>
                <select name="id_consultor" class="form-select">
                    <?php foreach ($consultants as $consultant) : ?>
                        <option value="<?= $consultant['id_consultor'] ?>" <?= $consultant['id_consultor'] == $client['id_consultor'] ? 'selected' : '' ?>>
                            <?= $consultant['nombre_consultor'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Logo:</label>
                <input type="file" name="logo" class="form-control">
                <?php if ($client['logo']): ?>
                    <img src="<?= base_url('uploads/' . $client['logo']) ?>" alt="Logo" width="100" class="mt-2">
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Firma Representante Legal:</label>
                <input type="file" name="firma_representante_legal" class="form-control">
                <?php if ($client['firma_representante_legal']): ?>
                    <img src="<?= base_url('uploads/' . $client['firma_representante_legal']) ?>" alt="Firma" width="100" class="mt-2">
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Estándares:</label>
                <select name="estandares" class="form-select">
                    <option value="7A" <?= $client['estandares'] == '7A' ? 'selected' : '' ?>>7A</option>
                    <!-- Opciones adicionales para estándares -->
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
        </form>

        <div class="mt-4">
            <a href="<?= base_url('/listClients') ?>" class="btn btn-secondary">Volver a la lista de clientes</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>
