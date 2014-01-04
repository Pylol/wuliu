<?php
class AccountAction extends Action {
	public function order(){
        $this->script_name = 'order';
        $this->display();
    }
    public function transonline(){
        $this->script_name = 'transonline';
        $this->display();
    }
    public function consignee(){
        $this->script_name = 'consignee';
        $this->display();
    }
    public function claims(){
        $this->script_name = 'claims';
        $this->display();
    }
    public function message(){
        $this->script_name = 'message';
        $this->display();
    }
    public function info(){
        $this->script_name = 'info';
        $this->display();
    }
    public function coupon(){
        $this->script_name = 'coupon';
        $this->display();
    }
}
