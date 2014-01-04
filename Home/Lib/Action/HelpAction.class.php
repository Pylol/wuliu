<?php
class HelpAction extends Action{
	public function delivery(){
		$this->script_name = 'faq';
		$this->display();
	}
	public function tracking(){
		$this->script_name = 'faq';
		$this->display();
	}
	public function receive(){
		$this->script_name = 'faq';
		$this->display();
	}
	public function account(){
		$this->script_name = 'faq';
		$this->display();
	}
	public function contraband(){
		$this->script_name = 'faq';
		$this->display();
	}
	public function complain(){
		$this->script_name = 'complain';
		$this->display();
	}
	public function map(){
		$this->script_name = 'map';
		$this->display();
	}
	public function price(){
		$this->script_name = 'price';
		$this->display();
	}
	public function station(){
		$this->script_name = 'station';
		$this->display();
	}
	public function city(){
		$this->script_name = 'station';
		$this->display();
	}
}