<?php
class IndexAction extends Action {
    public function index(){
    	$this->script_name = 'index';
		$this->display();
    }
}
