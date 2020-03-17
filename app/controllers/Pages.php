<?php 

class Pages extends Controller {
	public function __construct() {
		$this->postModel = $this->model('Post');
		 
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