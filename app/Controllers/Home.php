<?php namespace App\Controllers;

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

				$form_data['success'] = true;
				$form_data['posted'] = 'Data Was Posted Successfully';
				$form_data['errors']  = '';
				$form_data['password'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);
				$form_data['v'] = password_verify('1234', '$2y$10$tugiQ.rSR/6FoDxmFUODbuP4VDZsFoRXxZqkmNrkcP53W0Bi5gHaG');
			}
		
		//Return the data back to form.php
		echo json_encode($form_data);
		
	}

}
