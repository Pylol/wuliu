<?php
class UserAction extends Action {
    public function _initialize(){
        $this->css = 'regist_login';
    }
    public function regist_login(){
        $this->display();
    }
}
