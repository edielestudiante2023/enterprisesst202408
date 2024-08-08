<?php 

namespace App\Models;

use CodeIgniter\Model;

class ConsultantModel extends Model
{
    protected $table = 'tbl_consultor';
    protected $primaryKey = 'id_consultor';
    protected $allowedFields = ['nombre_consultor', 'cedula_consultor', 'usuario', 'password', 'correo_consultor', 'telefono_consultor', 'id_cliente'];

    public function getAllConsultants() {
        return $this->findAll();
    }
}

?>