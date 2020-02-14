<?php namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
        protected $table = 'TBL_USUARIO';
        protected $primaryKey = 'CD_USUARIO'; 

        protected $returnType = 'object';

        protected $allowedFields = ['NM_USUARIO'];

        public function getUsuarioPeloCodigo($cd_usuario)
        {
          return $this->where(["CD_USUARIO" => $cd_usuario])->first()->DS_SENHA;        
        }
}
