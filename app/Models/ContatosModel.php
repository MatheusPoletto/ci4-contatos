<?php namespace App\Models;

use CodeIgniter\Model;

class ContatosModel extends Model
{
        protected $table = 'TBL_CONTATO';
        protected $returnType = '\App\Entities\Contato';

        public function getColunas()
        {
                $db = \Config\Database::connect();

                return $db->simpleQuery("SELECT `COLUMN_NAME` 
                FROM `INFORMATION_SCHEMA`.`COLUMNS` 
                WHERE `TABLE_SCHEMA`='db_contatos' 
                    AND `TABLE_NAME`='tbl_contato';")->fetch_all();               
        }

        public function getContatos()
        {
                return $this->findAll();               
        }
}
