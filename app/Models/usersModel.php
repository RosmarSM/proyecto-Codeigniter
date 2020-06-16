<?php 

namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{

    protected $table = "usuarios";
    protected $primaryKey = "id_usuarios"; 

    protected $returnType = "array";
    protected $useSoftDeletes = true;
    //campos que quiero insertar en la bd
    protected $allowedFields = ["name","username","password","rol","last_login"];
}
?>