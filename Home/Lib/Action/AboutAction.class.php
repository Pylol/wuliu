<?php
class AboutAction extends Action {
    public function _initialize(){
        $this->css = 'about';
    }
    public function intro(){
		$this->display();
    }
    public function culture(){
        $this->display();
    }
    public function history(){
        $this->display();
    }
    public function honour(){
        $this->display();
    }
    public function news(){
		$this->display();
    }
    public function contact(){
		$this->display();
    }
    public function recruit(){
        $this->display();
    }
    public function detail(){
        $this->display();
    }
}
