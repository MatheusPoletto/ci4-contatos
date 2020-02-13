<?php namespace App\Models;

use CodeIgniter\Model;

class ContatosModel extends Model
{
        protected $table = 'TBL_CONTATO';

        public function getContatos($nome = false)
        {
                if ($nome === false)
                {
                        return $this->findAll();
                }
        
                return $this->asArray()
                             ->where(['DS_NOME' => $nome])
                             ->first();
        }
}
