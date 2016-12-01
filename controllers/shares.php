<?php
class Shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->Index(), true);
	}

	protected function add(){
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->add(), true);
	}
}