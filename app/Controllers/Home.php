<?php namespace App\Controllers;
use App\Models\UsuariosModel;

class Home extends BaseController
{
	public function index()
	{
			echo view('login', ['title' => 'Blue / Acesso']);
	}

	public function post_login()
	{
		$errors = array();
		$form_data = array(); 
		
		if (empty($_POST['login'])) { 
				$errors['login'] = 'Preencha o Login';
		}

		if ($_POST['login'] == "123") { //Name cannot be empty
			$errors['login'] = 'O Login não pode ser 123';
	}

		if (empty($_POST['senha'])) { //Name cannot be empty
			$errors['senha'] = 'Preencha a Senha';
	}
		
		if (!empty($errors)) { //If errors in validation
				$form_data['success'] = false;
				$form_data['errors']  = $errors;
		}
		else { //If not, process the form, and return true on success

				$usuario = new UsuariosModel();
				$senha_db = $usuario->getUsuarioPeloCodigo($_POST['login']);
				$confere = false;
				if($senha_db){
					$confere = password_verify($_POST['senha'], $senha_db);
				}

				$form_data['success'] = true;
				$form_data['confere'] = $confere;
				$form_data['errors']  = '';
			}
		
		//Return the data back to form.php
		echo json_encode($form_data);
		
	}

}
