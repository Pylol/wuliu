<?php
class AboutAction extends Action {
    public function intro(){
    	$this->script_name = 'intro';
		$this->display();
    }
    public function news(){
    	$this->script_name = 'news';
		$this->display();
    }
    public function contact(){
    	$this->script_name = 'contact';
		$this->display();
    }
    public function recruit(){
        $this->script_name = 'recruit';
        $this->display();
    }
    public function detail(){
        $this->script_name = 'detail';
        $this->display();
    }
}
