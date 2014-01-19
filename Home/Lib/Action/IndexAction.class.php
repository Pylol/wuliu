<?php
class IndexAction extends Action {
	public function _initialize(){
		$this->css = 'index';
		$this->js = 'index';
	}
    public function index(){
		$this->display();
    }
}
