<?php 

namespace App\Controllers;
use CodeIgniter\Controller;


class Dashboard extends BaseController{
    
    public function index()
	{

        echo "Inicio";
        //$this-> para acceder a otra funcion
        $this->helloWorld("slug",24);


        $data['dato1']="testing1";
        $data['dato2']="testing2";
        //mostrando la vista y pasando la variable data
		return view('form',$data);
    }
    
    public function helloWorld($slug=null,$id=null){
        echo $slug."<br>".$id;
    }
    //Utilizar el parsing
    public function template(){

        //accedemos a la configuracion
        $parser = \Config\Services::parser();
        //datos que queremos pasar a la vista
        $data=[
            //'variable' => 'valor'
            'title'=>'Mi titulo del sitioWeb',
            'content'=>'sbgkdjvbgfvsvasv',
            'footer'=>'gracias'
        ];
        // asignamos los datos $data y lo mandamos a la vista con render
        echo $parser->setData($data)->render('template');

    }

	//--------------------------------------------------------------------

}