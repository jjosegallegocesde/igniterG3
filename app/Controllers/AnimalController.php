<?php namespace App\Controllers;

use App\Models\AnimalModel;

class AnimalController extends BaseController {
    
    public function index() {

		$animalModel= new AnimalModel();
		$busqueda=$animalModel->asObject()->findAll();
		$datosParaVista=array('animales'=>$busqueda);

	
		return view('vistaAnimal',$datosParaVista);
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

	public function eliminar($id){

		$animalModel= new AnimalModel();

		$animalModel->where('id',$id)->delete();

		return redirect()->to(base_url('public/animales'));

	}

	public function modificar($id){

		$animalModel= new AnimalModel();
		
		$comida= $this->request->getPost('comida2');
		$edad = $this->request->getPost('edad2');


		$animalModel->update($id,[
			'comida'=>$comida,
			'edad'=>$edad
		]);
		
		return redirect()->to(base_url('public/animales'));


	}

	

	

	

	//--------------------------------------------------------------------

}



