<?php


namespace App\Models;

use CodeIgniter\Model;

class DynamicModel extends Model {
    protected $table      = 'entities';
    protected $primaryKey = 'entityID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ["entityID","name","field","label","type","list","mandatory","sequence","listable","visible"];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function list($entity) {
        $db = \Config\Database::connect();
        $data = $db->query("SELECT * FROM $entity WHERE deleted_at IS NULL")->getResult();
        if (!$data):
            return false;
        endif;
        return $data;
    }

    public function list_periods($entity) {
        $db = \Config\Database::connect();
        $data = $db->query("SELECT * FROM $entity WHERE deleted_at IS NULL ORDER BY ano DESC")->getResult();
        //print_r($data[0]->mes);
        $arr = [];
        $jan = [];
        $fev = [];
        $mar = [];
        $abr = [];
        $mai = [];
        $jun = [];
        $jul = [];
        $ago = [];
        $set = [];
        $out = [];
        $nov = [];
        $dez = [];

        $arr23 = [];
        $jan23 = [];
        $fev23 = [];
        $mar23 = [];
        $abr23 = [];
        $mai23 = [];
        $jun23 = [];
        $jul23 = [];
        $ago23 = [];
        $set23 = [];
        $out23 = [];
        $nov23 = [];
        $dez23 = [];

        $arr25 = [];
        $jan25 = [];
        $fev25 = [];
        $mar25 = [];
        $abr25 = [];
        $mai25 = [];
        $jun25 = [];
        $jul25 = [];
        $ago25 = [];
        $set25 = [];
        $out25 = [];
        $nov25 = [];
        $dez25 = [];
        foreach($data as $chave => $valor){


            if($valor->ano === '2025'){

                if($valor->mes === 'DEZEMBRO'){
                    $dez25[] = $valor;
                }
                if($valor->mes === 'NOVEMBRO'){
                    $nov25[] = $valor;
                }
                if($valor->mes === 'OUTUBRO'){
                    $out25[] = $valor;
                }
                if($valor->mes === 'SETEMBRO'){
                    $set25[] = $valor;
                }
                if($valor->mes === 'AGOSTO'){
                    $ago25[] = $valor;
                }
                if($valor->mes === 'JULHO'){
                    $jul25[] = $valor;
                }
                if($valor->mes === 'JUNHO'){
                    $jun25[] = $valor;
                }
                if($valor->mes === 'MAIO'){
                    $mai25[] = $valor;
                }
                if($valor->mes === 'ABRIL'){
                    $abr25[] = $valor;
                }
                if($valor->mes === 'MARÇO'){
                    $mar25[] = $valor;
                }
                if($valor->mes === 'FEVEREIRO'){
                    $fev25[] = $valor;
                }
                if($valor->mes === 'JANEIRO'){
                    $jan25[] = $valor;
                }

                if(count($dez25)>0){
                    $arr25[] = $dez25;
                }
                if(count($nov25)>0){
                    $arr25[] = $nov25;
                }
                if(count($out25)>0){
                    $arr25[] = $out25;
                }
                if(count($set25)>0){
                    $arr25[] = $set25;
                }
                if(count($ago25)>0){
                    $arr25[] = $ago25;
                }
                if(count($jul25)>0){
                    $arr25[] = $jul25;
                }
                if(count($jun25)>0){
                    $arr25[] = $jun25;
                }
                if(count($mai25)>0){
                    $arr25[] = $mai25;
                }
                if(count($abr25)>0){
                    $arr25[] = $abr25;
                }
                if(count($mar25)>0){
                    $arr25[] = $mar25;
                }
                if(count($fev25)>0){
                    $arr25[] = $fev25;
                }
                if(count($jan25)>0){
                    $arr25[] = $jan25;
                }

            }


            if($valor->ano === '2024'){

                if($valor->mes === 'DEZEMBRO'){
                    $dez[] = $valor;
                }
                if($valor->mes === 'NOVEMBRO'){
                    $nov[] = $valor;
                }
                if($valor->mes === 'OUTUBRO'){
                    $out[] = $valor;
                }
                if($valor->mes === 'SETEMBRO'){
                    $set[] = $valor;
                }
                if($valor->mes === 'AGOSTO'){
                    $ago[] = $valor;
                }
                if($valor->mes === 'JULHO'){
                    $jul[] = $valor;
                }
                if($valor->mes === 'JUNHO'){
                    $jun[] = $valor;
                }
                if($valor->mes === 'MAIO'){
                    $mai[] = $valor;
                }
                if($valor->mes === 'ABRIL'){
                    $abr[] = $valor;
                }
                if($valor->mes === 'MARÇO'){
                    $mar[] = $valor;
                }
                if($valor->mes === 'FEVEREIRO'){
                    $fev[] = $valor;
                }
                if($valor->mes === 'JANEIRO'){
                    $jan[] = $valor;
                }

                if(count($dez)>0){
                    $arr[] = $dez;
                }
                if(count($nov)>0){
                    $arr[] = $nov;
                }
                if(count($out)>0){
                    $arr[] = $out;
                }
                if(count($set)>0){
                    $arr[] = $set;
                }
                if(count($ago)>0){
                    $arr[] = $ago;
                }
                if(count($jul)>0){
                    $arr[] = $jul;
                }
                if(count($jun)>0){
                    $arr[] = $jun;
                }
                if(count($mai)>0){
                    $arr[] = $mai;
                }
                if(count($abr)>0){
                    $arr[] = $abr;
                }
                if(count($mar)>0){
                    $arr[] = $mar;
                }
                if(count($fev)>0){
                    $arr[] = $fev;
                }
                if(count($jan)>0){
                    $arr[] = $jan;
                }

            }

            if($valor->ano === '2023'){

                if($valor->mes === 'DEZEMBRO'){
                    $dez23[] = $valor;
                }
                if($valor->mes === 'NOVEMBRO'){
                    $nov23[] = $valor;
                }
                if($valor->mes === 'OUTUBRO'){
                    $out23[] = $valor;
                }
                if($valor->mes === 'SETEMBRO'){
                    $set23[] = $valor;
                }
                if($valor->mes === 'AGOSTO'){
                    $ago23[] = $valor;
                }
                if($valor->mes === 'JULHO'){
                    $jul23[] = $valor;
                }
                if($valor->mes === 'JUNHO'){
                    $jun23[] = $valor;
                }
                if($valor->mes === 'MAIO'){
                    $mai23[] = $valor;
                }
                if($valor->mes === 'ABRIL'){
                    $abr23[] = $valor;
                }
                if($valor->mes === 'MARÇO'){
                    $mar23[] = $valor;
                }
                if($valor->mes === 'FEVEREIRO'){
                    $fev23[] = $valor;
                }
                if($valor->mes === 'JANEIRO'){
                    $jan23[] = $valor;
                }

                if(count($dez23)>0){
                    $arr23[] = $dez23;
                }
                if(count($nov23)>0){
                    $arr23[] = $nov23;
                }
                if(count($out23)>0){
                    $arr23[] = $out23;
                }
                if(count($set23)>0){
                    $arr23[] = $set23;
                }
                if(count($ago23)>0){
                    $arr23[] = $ago23;
                }
                if(count($jul23)>0){
                    $arr23[] = $jul23;
                }
                if(count($jun23)>0){
                    $arr23[] = $jun23;
                }
                if(count($mai23)>0){
                    $arr23[] = $mai23;
                }
                if(count($abr23)>0){
                    $arr23[] = $abr23;
                }
                if(count($mar23)>0){
                    $arr23[] = $mar23;
                }
                if(count($fev23)>0){
                    $arr23[] = $fev23;
                }
                if(count($jan23)>0){
                    $arr23[] = $jan23;
                }

            }

            
           

            //  print_r($chave);
            //  echo '<br />';
        }

       

        $arr = array_merge($arr25, $arr, $arr23);
        

        $arr = array_filter($arr);

       // print_r($arr);

        

        if (!$arr):
            return false;
        endif;
        return $arr;
    }


    public function list_nav($entity) {
        $db = \Config\Database::connect();
        $data = $db->query("SELECT * FROM $entity WHERE deleted_at IS NULL ORDER BY ordem ASC")->getResult();
        if (!$data):
            return false;
        endif;
        return $data;
    }

    public function return_list($entity) {
        $data = $this->list($entity);
        return $data;
    }

    public function record_data($entity, $data) {
        $db = \Config\Database::connect();
        if($db->table($entity)->insert($data)){
            return true;
        }
    }

    public function validate_data($entity, $data){
        $dynamicModel = new DynamicModel();
        $entityModel = $dynamicModel->where('name', $entity)->asObject()->findAll();
        
        foreach($entityModel as $key => $row){
            if($row->mandatory == 1){
                if(!array_key_exists($row->field, $data)){
                    return false;
                }    
            }
            
        }
        return true;
        
    }



    public function load_object($entity, $ID, $fieldID) {
        $db = \Config\Database::connect();
        $data = $db->query("SELECT * FROM $entity WHERE $fieldID = $ID")->getRowObject();
        if($data){
            return $data;    
        }
        return false;
    }

    public function return_fieldID($entity){
        $db = \Config\Database::connect();
        $data = $db->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS`  WHERE `TABLE_SCHEMA`='zero_project' AND `TABLE_NAME`='$entity';")->getRowObject();
        if($data){
            return $data->COLUMN_NAME;  
        }
        return false;
    }
    
    public function change($entity_name, $data, $ID, $refID) {
        $db = \Config\Database::connect();
        $data["updated_at"] = date('Y/m/d h:i:s');
        if($db->table($entity_name)->where($refID, $ID)->update($data)){
            return true;
        }
    }



    public function busca($entity, $fields, $search) {
        $db = \Config\Database::connect();
        $builder = $db->table('entities');

        foreach ($fields as $field):
            $db->where($field, $search);
        endforeach;
        $data = $db->get();

        if(!$data){
            return false;
        }
        return $data;
    }

    public static function listar($entidade, $limit = NULL, $offset = NULL, $campo_ordenacao = NULL) {
        $CI = & get_instance();
        $objs = Entidade::seleciona_entidade($entidade);
        foreach ($objs as $obj):
            if ($obj->tipo == 'id'):
                $ID = $obj->campo;
            endif;
        endforeach;

        $CI->db->select("*")->from($entidade)->where("removido", 0);
        if ($limit):
            $CI->db->limit($limit, $offset);
        endif;
        if ($campo_ordenacao):
            $CI->db->order_by($campo_ordenacao, "ASC");
        else:
            $CI->db->order_by($ID, "DESC");
        endif;

        $lista = $CI->db->get()->result();
        return $lista;
    }

    public static function seleciona_lista_randomico($entidade, $quantos) {
        $CI = & get_instance();
        $lista = $CI->db->select("*")->from($entidade)->where("removido", 0)->order_by("ativo", "random")->limit($quantos)->get()->result();
        return $lista;
    }

    public static function list_categoria($entity, $categoria){
        $db = \Config\Database::connect();
        
        $data = $db->query("SELECT * FROM $entity WHERE categoria = '$categoria' AND deleted_at IS NULL ORDER BY ordem ASC")->getResult();
        if($data){
            return $data;    
        }
        return false;
    }

    public static function list_acompanhamento($entity, $ano, $mes){
        $db = \Config\Database::connect();
        
        $data = $db->query("SELECT * FROM $entity WHERE mes = '$mes' AND ano = $ano AND deleted_at IS NULL ORDER BY ordem ASC")->getResult();
        if($data){
            return $data;    
        }
        return false;
    }

    public static function list_subcategoria($entity, $categoria){
        $db = \Config\Database::connect();
        
        $data = $db->query("SELECT * FROM $entity WHERE paiID = '$categoria' AND deleted_at IS NULL ORDER BY ordem ASC")->getResult();
        if($data){
            return $data;    
        }
        return false;
    }

    public static function ajusta_categoria($categorias){
        $db = \Config\Database::connect();

        $categoriasPai = [];
        foreach($categorias as $categoria):
            if($categoria->paiID == null):
                array_push($categoriasPai, $categoria); 
            endif;
        endforeach;

        foreach($categoriasPai as $categoriaPai):
            $data = $db->query("SELECT * FROM galeria_plantas_categorias WHERE paiID = '$categoriaPai->name'")->getResult();
            
            if($data){
                $categoriaPai->filhos = $data;
            }
        endforeach;
        
        return $categoriasPai;
    } 

}