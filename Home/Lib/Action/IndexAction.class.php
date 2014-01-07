<?php
class IndexAction extends Action {
    public function index(){
    	$this->css = 'index';
		$this->display();
    }
}
