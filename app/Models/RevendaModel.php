<?php

namespace App\Models;

use CodeIgniter\Model;

class RevendaModel extends Model {
  protected $table      = 'revendas';
  protected $primaryKey = 'revendaID';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = ["nome","slug", "latitude", "longitude", "endereco", "razao_social", "cnpj", "telefone", "foto_principal", "whatsapp", "email_google", "senha_email_google", "horario_funcionamento", "google_meu_negocio", "site", "login_site", "senha_site", "facebook", "facebook_login", "facebook_senha", "instagram", "instagram_login", "instagram_senha", "marketing", "call_to_action","entrega", "area_atuacao", "servicos", "categoria", "descricao_status", "pronto"];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;

  public static function relatorio(){
    $db = \Config\Database::connect();

    $data = $db->query("SELECT 
       (SELECT count(distinct ip) FROM relatorios WHERE acao = 'click' AND revendaID = revendas.revendaID) AS 'cliques',
       (SELECT count(distinct ip) FROM relatorios WHERE acao = 'pageView' AND revendaID = revendas.revendaID) AS 'impressoes',
       revendas.nome, revendas.revendaID
       FROM revendas")->getResult();
    return $data;
 }

 public static function relatorio_revendaID($revendaID){
    $db = \Config\Database::connect();

    $data = $db->query("SELECT 
       (SELECT count(distinct ip) FROM relatorios WHERE acao = 'click' AND revendaID = '$revendaID') AS 'cliques',
       (SELECT count(distinct ip) FROM relatorios WHERE acao = 'pageView' AND revendaID = '$revendaID') AS 'impressoes'")->getRowObject();
    return $data;
 }

}
