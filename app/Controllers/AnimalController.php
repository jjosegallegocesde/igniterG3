<?php namespace App\Controllers;

use App\Models\AnimalModel;


class AnimalController extends BaseController {
    
    public function index() {

		$arreglo=array(
			
			'nombre'=>"SAMY EL LEON",
			'comida'=>"HELADO DE LIMÓN"
		);

		return view('vistaAnimal');
	}

	public function crear(){

		$animalModel= new AnimalModel();

	
		$nombre= $this->request->getPost('nombre');
		$comida= $this->request->getPost('comida');
		$edad = $this->request->getPost('edad');


		$animalModel->save([
			'nombre'=>$nombre,
			'comida'=>$comida,
			'edad'=>$edad
		]);

		return redirect()->to(base_url('public/animales'))->with('mensaje', 'animal registrado con éxito!');
		

	}

	

	//--------------------------------------------------------------------

}



