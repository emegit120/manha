<?php

namespace App\Controllers;

use App\Models\RevendaModel;
use App\Models\DynamicModel;
use App\Models\ConfigModel;

class Home extends BaseController {

	public function __construct() {
		$this->session = session();
		helper('html');
		helper('session');
		helper('Helpers\utilitys');
	}
	
	public $data;

	public function index(){
		$dynamicModel = new DynamicModel();
		$this->data["banners_home"] = $dynamicModel->list('banners_home');

		$this->data["galeria_inicial_categorias"] = $dynamicModel->list_nav('galeria_inicial_categorias');
		$this->data["galeria_inicial_banners"] = $dynamicModel->list_categoria('galeria_inicial_banners', $this->data["galeria_inicial_categorias"][0]->name);


		$this->data["galeria_areas_categorias"] = $dynamicModel->list_nav('galeria_areas_categorias');
		$this->data["galeria_areas_banners"] = $dynamicModel->list_categoria('galeria_areas_banners', $this->data["galeria_areas_categorias"][0]->name);

		$this->data["galeria_plantas_categorias"] = $dynamicModel->list_nav('galeria_plantas_categorias');
		$this->data["galeria_plantas_categorias"] = $dynamicModel->ajusta_categoria($this->data["galeria_plantas_categorias"]);

		$this->data["galeria_plantas_banners"] = $dynamicModel->list_categoria('galeria_plantas_banners', $this->data["galeria_plantas_categorias"][0]->name);

		$this->data["diferenciais"] = $dynamicModel->list('diferenciais');

		$this->data["galeria_projetistas_categorias"] = $dynamicModel->list_nav('galeria_projetistas_categorias');
		$this->data["galeria_projetistas_banners"] = $dynamicModel->list_categoria('galeria_projetistas_banners', $this->data["galeria_projetistas_categorias"][0]->name);

		$this->data["galeria_curadoria_banners"] = $dynamicModel->list('galeria_curadoria_banners');
		$this->data["galeria_stand_banners"] = $dynamicModel->list('galeria_stand_banners');
		$this->data["galeria_bairro_banners"] = $dynamicModel->list('galeria_bairro_banners');
		$this->data["certificados"] = $dynamicModel->list('certificados');

		$configModel = new ConfigModel();
		$this->data["configs"] = $configModel->asObject()->find();
		//dump($this->data["configs"]);

		$this->data["atualizadoem"] = $dynamicModel->list('atualizadoem');
		$this->data["video"] = $dynamicModel->list('video');

		$session = \Config\Services::session();
		if($session->getFlashdata('mensagem')){
			$this->data["mensagem"] = "Mensagem enviada com sucesso. Em breve entraremos em contato com você.";
		}

		return view('site/index', $this->data);
	}

	public function carrega_galeria(){
		$dynamicModel = new DynamicModel();

		$categoria = $this->request->getPost("categoria");
		$galeria = $this->request->getPost("galeria");
		$this->data["galeria"] = $dynamicModel->list_categoria($galeria, $categoria);
		
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

	public function acompanhamento_de_obra(){
		$dynamicModel = new DynamicModel();
		$this->data["banners_home"] = $dynamicModel->list('banners_home');

		$this->data["galeria_inicial_categorias"] = $dynamicModel->list_nav('galeria_inicial_categorias');
		$this->data["galeria_inicial_banners"] = $dynamicModel->list_categoria('galeria_inicial_banners', $this->data["galeria_inicial_categorias"][0]->name);


		$this->data["galeria_areas_categorias"] = $dynamicModel->list_nav('galeria_areas_categorias');
		$this->data["galeria_areas_banners"] = $dynamicModel->list_categoria('galeria_areas_banners', $this->data["galeria_areas_categorias"][0]->name);

		$this->data["galeria_plantas_categorias"] = $dynamicModel->list_nav('galeria_plantas_categorias');
		$this->data["galeria_plantas_categorias"] = $dynamicModel->ajusta_categoria($this->data["galeria_plantas_categorias"]);

		$this->data["galeria_plantas_banners"] = $dynamicModel->list_categoria('galeria_plantas_banners', $this->data["galeria_plantas_categorias"][0]->name);

		$this->data["diferenciais"] = $dynamicModel->list('diferenciais');

		$this->data["galeria_projetistas_categorias"] = $dynamicModel->list_nav('galeria_projetistas_categorias');
		$this->data["galeria_projetistas_banners"] = $dynamicModel->list_categoria('galeria_projetistas_banners', $this->data["galeria_projetistas_categorias"][0]->name);

		$this->data["galeria_curadoria_banners"] = $dynamicModel->list('galeria_curadoria_banners');
		$this->data["galeria_bairro_banners"] = $dynamicModel->list('galeria_bairro_banners');
		$this->data["certificados"] = $dynamicModel->list('certificados');

		$configModel = new ConfigModel();
		$this->data["configs"] = $configModel->asObject()->find();
		//dump($this->data["configs"]);

		$session = \Config\Services::session();
		if($session->getFlashdata('mensagem')){
			$this->data["mensagem"] = "Cadastro efetuado com sucesso!";
		}

		return view('site/acompanhamento-de-obra', $this->data);
	}

}