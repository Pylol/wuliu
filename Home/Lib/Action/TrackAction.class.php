<?php
class TrackAction extends Action {
	public function _initialize(){
		$this->css = 'track';
	}
    public function track(){
		$this->display();
    }
}
