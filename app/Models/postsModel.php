<?php 

namespace App\Models;
use CodeIgniter\Model;

class PostsModel extends Model{

    protected $table = "posts";
    protected $primaryKey = "id_posts"; 

    protected $returnType = "array";
    protected $useSoftDeletes = true;
    //campos que quiero insertar en la bd
    protected $allowedFields = ["banner","title","intro","content","category","tags","created_at","created_by"];
}
?>