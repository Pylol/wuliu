<?php
class AccountAction extends Action {
    public function _initialize(){
        $this->css = 'account';
    }
	public function order(){
        $this->display();
    }
    public function transonline(){
        $this->display();
    }
    public function consignee(){
        $this->display();
    }
    public function claims(){
        $this->display();
    }
    public function message(){
        $this->display();
    }
    public function info(){
        $this->js = 'info';
        $this->display();
    }
    public function coupon(){
        $this->display();
    }
}
