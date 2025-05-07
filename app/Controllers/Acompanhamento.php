<?php

namespace App\Controllers;

use App\Models\RevendaModel;
use App\Models\DynamicModel;
use App\Models\ConfigModel;

class Acompanhamento extends BaseController {

	public function __construct() {
		$this->session = session();
		helper('html');
		helper('session');
		helper('Helpers\utilitys');
	}
	
	public $data;

	public function index(){
		$dynamicModel = new DynamicModel();
		//$this->data["acompanhamento"] = $dynamicModel->list('acompanhamento');

		$this->data["acompanhamento"] = $dynamicModel->list_periods('acompanhamento');

		

		$configModel = new ConfigModel();
		$this->data["configs"] = $configModel->asObject()->find();
		//dump($this->data["configs"]);

		$session = \Config\Services::session();
		if($session->getFlashdata('mensagem')){
			$this->data["mensagem"] = "Cadastro efetuado com sucesso!";
		}

		return view('site/acompanhamento-de-obra', $this->data);
	}

	public function lista_periodos(){
		$dynamicModel = new DynamicModel();

		$this->data["acompanhamento"] = $dynamicModel->list_periods('acompanhamento');
		
		echo json_encode($this->data["acompanhamento"]);
	}

	public function carrega_galeria(){
		$dynamicModel = new DynamicModel();

		$mes = $this->request->getPost("mes");
		$ano = $this->request->getPost("ano");

		$this->data["galeria"] = $dynamicModel->list_acompanhamento('acompanhamento', $ano, $mes);
		
		echo json_encode($this->data["galeria"]);
	}

	public function carrega_subcategoria(){
		$dynamicModel = new DynamicModel();

		$categoriaID = $this->request->getPost("categoriaID");
		$this->data["categorias"] = $dynamicModel->list_subcategoria('galeria_plantas_categorias', $categoriaID);
		echo json_encode($this->data["categorias"]);
	
	}

	public function save_lead(){
		$dynamicModel = new DynamicModel();

		$data = $this->request->getPost();

		$dynamicModel->record_data("leads", $data);
		
		$session = \Config\Services::session();
		$session->setFlashdata('mensagem', 'true');

		return redirect()->to("Home");
	}


}