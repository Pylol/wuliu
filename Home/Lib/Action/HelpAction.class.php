<?php
class HelpAction extends Action{
	public function _initialize(){
		$this->css = 'help';
	}
	public function delivery(){
		$this->display();
	}
	public function tracking(){
		$this->display();
	}
	public function receive(){
		$this->display();
	}
	public function account(){
		$this->display();
	}
	public function contraband(){
		$this->display();
	}
	public function complain(){
		$this->display();
	}
	public function map(){
		$this->display();
	}
	public function price(){
		$this->display();
	}
	public function station(){
		$this->display();
	}
	public function city(){
		$this->display();
	}
}