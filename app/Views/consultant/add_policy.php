<!DOCTYPE html>
<html>

<head>
    <title>Agregar Política</title>
</head>

<body>

<h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

    <h1>Agregar Nueva Política</h1>

    <form action="<?= base_url('/addPolicyPost') ?>" method="post">
        <label for="client_id">Cliente:</label>
        <select name="client_id" required>
            <?php foreach ($clients as $client): ?>
                <option value="<?= $client['id_cliente'] ?>"><?= $client['nombre_cliente'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>

        

        <label for="policy_type_id">Tipo de Política:</label>
        <select name="policy_type_id" required>
            <?php foreach ($policyTypes as $type): ?>
                <option value="<?= $type['id'] ?>"><?= $type['type_name'] ?></option>
            <?php endforeach; ?>
        </select>

        <br>

        <label for="policy_content">Contenido:</label>
        <textarea name="policy_content" required></textarea>
        <br>

        <button type="submit">Agregar Política</button>
    </form>

    <a href="<?= base_url('/listPolicies') ?>">Volver a la lista de políticas</a>

</body>

</html>