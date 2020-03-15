<?php 

class Pages extends Controller {
	public function __construct() {

	}

	public function index() {
		$this->view('pages/index');
	}

  public function about() {
		$data = [
			'name' => "Ilyas"
		];
		$this->view('pages/about', $data);
  }
}