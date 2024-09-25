<h2>Editar Política de KPI</h2>

<form action="<?= base_url('editKpiPolicyPost/' . $kpiPolicy['id_kpi_policy']) ?>" method="post">
    <label for="policy_kpi_definition">Definición de la Política:</label>
    <input type="text" name="policy_kpi_definition" id="policy_kpi_definition" value="<?= esc($kpiPolicy['policy_kpi_definition']) ?>" required><br>

    <label for="policy_kpi_comments">Comentarios sobre la Política:</label>
    <input type="text" name="policy_kpi_comments" id="policy_kpi_comments" value="<?= esc($kpiPolicy['policy_kpi_comments']) ?>"><br>

    <input type="submit" value="Actualizar Política de KPI">
</form>
<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
