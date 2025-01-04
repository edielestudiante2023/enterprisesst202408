<<<<<<< HEAD
<?php

namespace App\Models;

use CodeIgniter\Model;

class KpisModel extends Model
{
    protected $table = 'tbl_kpis'; // Nombre de la tabla
    protected $primaryKey = 'id_kpis'; // Clave primaria

    // Campos permitidos para la manipulación
    protected $allowedFields = ['kpi_name', 'hpi_comments', 'created_at', 'updated_at'];

    // Habilitar timestamps automáticos
    protected $useTimestamps = true;
}
=======
<?php

namespace App\Models;

use CodeIgniter\Model;

class KpisModel extends Model
{
    protected $table = 'tbl_kpis'; // Nombre de la tabla
    protected $primaryKey = 'id_kpis'; // Clave primaria

    // Campos permitidos para la manipulación
    protected $allowedFields = ['kpi_name', 'hpi_comments', 'created_at', 'updated_at'];

    // Habilitar timestamps automáticos
    protected $useTimestamps = true;
}
>>>>>>> main
