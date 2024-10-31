<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <title>Editar Vigía</title>
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-light">
            <h2 class="card-title">Editar Vigía</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('updateVigia/' . $vigia['id_vigia']) ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombre_vigia">Nombre del Vigía:</label>
                    <input type="text" name="nombre_vigia" class="form-control" value="<?= esc($vigia['nombre_vigia']) ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="cedula_vigia">Cédula:</label>
                    <input type="text" name="cedula_vigia" class="form-control" value="<?= esc($vigia['cedula_vigia']) ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="periodo_texto">Período:</label>
                    <input type="text" name="periodo_texto" class="form-control" value="<?= esc($vigia['periodo_texto']) ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="firma_vigia">Firma (Imagen):</label>
                    <input type="file" name="firma_vigia" class="form-control-file" accept="image/*">
                    <?php if (!empty($vigia['firma_vigia'])): ?>
                        <div class="mt-2">
                            <img src="<?= base_url('uploads/' . $vigia['firma_vigia']) ?>" alt="Firma del Vigía" width="100" class="img-thumbnail">
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="id_cliente">Cliente:</label>
                    <select name="id_cliente" class="form-control">
                        <?php foreach ($clients as $client): ?>
                            <option value="<?= $client['id_cliente'] ?>" <?= $client['id_cliente'] == $vigia['id_cliente'] ? 'selected' : '' ?>>
                                <?= $client['nombre_cliente'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Vigía</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('table').DataTable();
    });
</script>
</body>
</html>