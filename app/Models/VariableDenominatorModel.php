<<<<<<< HEAD
<?php

namespace App\Models;

use CodeIgniter\Model;

class VariableDenominatorModel extends Model
{
    protected $table = 'tbl_variable_denominator'; // Nombre de la tabla
    protected $primaryKey = 'id_denominator_variable'; // Clave primaria

    // Campos permitidos para la manipulación
    protected $allowedFields = ['denominator_variable_text', 'denominator_variable_data', 'created_at', 'updated_at'];

    // Habilitar timestamps automáticos
    protected $useTimestamps = true;
}
=======
<?php

namespace App\Models;

use CodeIgniter\Model;

class VariableDenominatorModel extends Model
{
    protected $table = 'tbl_variable_denominator'; // Nombre de la tabla
    protected $primaryKey = 'id_denominator_variable'; // Clave primaria

    // Campos permitidos para la manipulación
    protected $allowedFields = ['denominator_variable_text', 'denominator_variable_data', 'created_at', 'updated_at'];

    // Habilitar timestamps automáticos
    protected $useTimestamps = true;
}
>>>>>>> main
