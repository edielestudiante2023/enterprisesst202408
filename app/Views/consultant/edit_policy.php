<!DOCTYPE html>
<html>
<head>
    <title>Editar Política</title>
</head>
<body>

<h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

<h1>Editar Política</h1>

<form action="<?= base_url('/editPolicyPost/'.$policy['id']) ?>" method="post">
    <label for="client_id">Cliente:</label>
    <select name="client_id" required>
        <?php foreach ($clients as $client): ?>
            <option value="<?= $client['id_cliente'] ?>" <?= $client['id_cliente'] == $policy['client_id'] ? 'selected' : '' ?>><?= $client['nombre_cliente'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>

    <label for="policy_type_id">Tipo de Política:</label>
    <select name="policy_type_id" required>
        <?php foreach ($policyTypes as $type): ?>
            <option value="<?= $type['id'] ?>" <?= $type['id'] == $policy['policy_type_id'] ? 'selected' : '' ?>><?= $type['type_name'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>

    <label for="policy_content">Contenido:</label>
    <textarea name="policy_content" required><?= $policy['policy_content'] ?></textarea>
    <br>

    <button type="submit">Actualizar Política</button>
</form>


<a href="<?= base_url('/listPolicies') ?>">Volver a la lista de políticas</a>

</body>
</html>
