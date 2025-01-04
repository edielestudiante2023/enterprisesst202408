<<<<<<< HEAD
<?php

namespace App\Models;

use CodeIgniter\Model;

class MeasurementPeriodModel extends Model
{
    protected $table = 'tbl_measurement_period'; // Nombre de la tabla
    protected $primaryKey = 'id_measurement_period'; // Clave primaria

    // Campos permitidos para la manipulación
    protected $allowedFields = ['measurement_period', 'comment_measurement_period', 'created_at', 'updated_at'];

    // Habilitar timestamps automáticos
    protected $useTimestamps = true;
}
=======
<?php

namespace App\Models;

use CodeIgniter\Model;

class MeasurementPeriodModel extends Model
{
    protected $table = 'tbl_measurement_period'; // Nombre de la tabla
    protected $primaryKey = 'id_measurement_period'; // Clave primaria

    // Campos permitidos para la manipulación
    protected $allowedFields = ['measurement_period', 'comment_measurement_period', 'created_at', 'updated_at'];

    // Habilitar timestamps automáticos
    protected $useTimestamps = true;
}
>>>>>>> main
