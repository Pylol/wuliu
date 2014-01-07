<?php
class BusinessAction extends Action {
	public function _initialize(){
		$this->css = 'business';
	}
	public function transport(){
		$this->display();
	}
	public function collect(){
		$this->display();
	}
	public function package(){
		$this->display();
	}
	public function other(){
		$this->display();
	}
	public function activities(){
		$this->display();
	}
}