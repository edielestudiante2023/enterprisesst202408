<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Consultor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h2 class="text-center">Editar Consultor</h2>
            </div>

            <div class="card-body">
                <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning text-center">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('/editConsultantPost/' . $consultant['id_consultor']) ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <!-- Campos del formulario -->
                    <div class="mb-3">
                        <label for="nombre_consultor" class="form-label">Nombre Consultor:</label>
                        <input type="text" class="form-control" id="nombre_consultor" name="nombre_consultor" value="<?= $consultant['nombre_consultor'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="cedula_consultor" class="form-label">Cédula Consultor:</label>
                        <input type="text" class="form-control" id="cedula_consultor" name="cedula_consultor" value="<?= $consultant['cedula_consultor'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $consultant['usuario'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo_consultor" class="form-label">Correo Consultor:</label>
                        <input type="email" class="form-control" id="correo_consultor" name="correo_consultor" value="<?= $consultant['correo_consultor'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="telefono_consultor" class="form-label">Teléfono Consultor:</label>
                        <input type="text" class="form-control" id="telefono_consultor" name="telefono_consultor" value="<?= $consultant['telefono_consultor'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="numero_licencia" class="form-label">Número de Licencia:</label>
                        <input type="text" class="form-control" id="numero_licencia" name="numero_licencia" value="<?= $consultant['numero_licencia'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="foto_consultor" class="form-label">Foto del Consultor:</label>
                        <input type="file" class="form-control" id="foto_consultor" name="foto_consultor" accept="image/*">
                        <?php if (!empty($consultant['foto_consultor'])): ?>
                            <div class="mt-2">
                                <img src="<?= base_url('uploads/' . $consultant['foto_consultor']) ?>" alt="Foto del Consultor" class="img-thumbnail" width="100">
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="firma_consultor" class="form-label">Firma del Consultor:</label>
                        <input type="file" class="form-control" id="firma_consultor" name="firma_consultor" accept="image/*">
                        <?php if (!empty($consultant['firma_consultor'])): ?>
                            <div class="mt-2">
                                <img src="<?= base_url('uploads/' . $consultant['firma_consultor']) ?>" alt="Firma del Consultor" class="img-thumbnail" width="100">
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3">Actualizar Consultor</button>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <a href="<?= base_url('/listConsultants') ?>" class="btn btn-secondary">Volver a la lista de consultores</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Opcional: Validación de Bootstrap -->
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
