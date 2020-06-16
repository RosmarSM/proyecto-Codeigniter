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

    public function uploadPost(){

        if ($_POST) {
            //seleccionar el archivo en la etiqueta banner
            $file = $this->request->getFile("banner");
            //Asignarle un nombre aleatoria al archivo
            $fileName=$file->getRandomName();
            //si el archivo es valido
            if ($file->isValid()) {
                //mover el archivo a la carpeta writable\uploads 
                //$file->move(WRITEPATH."uploads"); con $file
                $file->move(WRITEPATH."uploads", $fileName);
            }else {
                echo "No valido";
            }
        }

        //$this->loadViews("uploadPost");
        echo view("uploadPost");
    }

    public function loadViews($view=null){
        echo view("includes/header");
        echo view($view);
        echo view("includes/footer");
    }
    
    

	//--------------------------------------------------------------------

}