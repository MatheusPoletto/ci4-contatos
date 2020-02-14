<?php namespace App\Controllers;
use App\Models\ContatosModel;
use CodeIgniter\Controller;

class Contatos extends Controller
{
        public function index()
        {        
                //$model = new ContatosModel();
               // $data['contatos'] = $model->getContatos();

                //print_r($data['contatos']);

                return view('Contatos/lista');

        }

        public function lista_todos()
        {
                $model = new ContatosModel();
                $data['columns'] = $model->getColunas();
             

                $data['data'][0][] = "7";
                $data['data'][0][] = "FONE";
                $data['data'][0][] = "FONE";
                $data['data'][0][] = "FONE";
                $data['data'][0][] = "FONE";

                $data['data'][1][] = "8";
                $data['data'][1][] = "FONE";
                $data['data'][1][] = "FONE";
                $data['data'][1][] = "FONE";
                $data['data'][1][] = "FONE";
                
                echo json_encode($data);

               // print_r($model->getContatos()[0]->NM_CONTATO);
		//echo json_encode($data);

        }
}