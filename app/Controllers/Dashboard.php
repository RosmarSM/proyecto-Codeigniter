<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\PostsModel;

class Dashboard extends Controller{
    
    public function index(){

        $model=new PostsModel();
        $model->insert([
            "banner"=>"img.jpg",
            "title"=>"RosmarSSS",
            "intro"=>"jelou",
            "content"=>"loremp",
            "category"=>"1",
            "tags"=>"deporte",
            "created_at"=>date("Y-m-d"),
            "created_by"=>"1",
        ]);
        $this->loadViews("index");

        /**asignar el modelo a la variable
        $model = new UsersModel();
        asignar valores a la bd
        $id = $model->insert([
            "name"=>"Rosmar",
            "username"=>"rosmism",
            "password"=>"1234",
            "rol"=>"1",
        ]);*/
    }

    public function loadViews($view=null){
        echo view("includes/header");
        echo view($view);
        echo view("includes/footer");
    }
    
    

	//--------------------------------------------------------------------

}