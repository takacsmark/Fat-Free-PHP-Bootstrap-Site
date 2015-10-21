<?php

class MainController extends Controller{

	function render(){

		$message = new Messages($this->db);
		$message->key = 'Second message';
		$message->message = 'This is the second message inserted from code';
		$message->save();

		$messages = new Messages($this->db);
		$msg = $messages->all()[0];

		$this->f3->set('msg',$msg);
        $template=new Template;
        echo $template->render('template.htm');

	}
}