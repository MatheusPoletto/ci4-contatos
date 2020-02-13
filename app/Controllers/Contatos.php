<?php namespace App\Controllers;
use App\Models\ContatosModel;
use CodeIgniter\Controller;

class Contatos extends Controller
{
        public function index()
        {        
                $model = new ContatosModel();
                $data['contatos'] = $model->getContatos();

                //print_r($data['contatos']);

                return view('Contatos/home', $data);

        }

        public function view($nome = null)
        {
                $model = new ContatosModel();

                $data['contatos'] = $model->getContatos($nome);
        }
}