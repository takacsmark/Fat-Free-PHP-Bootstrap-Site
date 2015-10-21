<?php

class UserController extends Controller{
	function render(){

        $template=new Template;
        echo $template->render('login.htm');
	}

	function beforeroute(){
	}

	function authenticate() {

		$username = $this->f3->get('POST.username');
		$password = $this->f3->get('POST.password');

		$user = new User($this->db);
		$user->getByName($username);

		if($user->dry()) {
			$this->f3->reroute('/login');
		}

		if(password_verify($password, $user->password)) {
			$this->f3->set('SESSION.user', $user->username);
			$this->f3->reroute('/');
		} else {
			$this->f3->reroute('/login');
		}
	}
}