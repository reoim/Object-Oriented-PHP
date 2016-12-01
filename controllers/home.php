<?php
class Home extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->ReturnView($viewmodel->Index(), true);
	}
}