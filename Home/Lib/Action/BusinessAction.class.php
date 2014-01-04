<?php
class BusinessAction extends Action {
	public function transport(){
		$this->script_name = 'transport';
		$this->display();
	}
	public function collect(){
		$this->script_name = 'collect';
		$this->display();
	}
	public function package(){
		$this->script_name = 'package';
		$this->display();
	}
	public function other(){
		$this->script_name = 'other';
		$this->display();
	}
	public function activities(){
		$this->script_name = 'activities';
		$this->display();
	}
}