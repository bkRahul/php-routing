<?php


namespace  App\Controllers;

use App\Core\App;

class UsersControllers {
	
	public function index() {

		$users = App::get('database')->select('users');

		return view('users', compact('users'));

	}

	public function store() {
	
		App::get('database')->insert('users', [
    
    'name' => $_POST['name']
	
	]);

		return redirect('users');
	
	}


}



?>