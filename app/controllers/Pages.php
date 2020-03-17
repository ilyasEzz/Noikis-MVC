<?php 

class Pages extends Controller {
	public function __construct() {
		$this->postModel = $this->model('Post');
		 
	}

	public function index() {
		$posts = $this->postModel->getPosts();


		$data = [
			'title' => 'Welcome to the Home Page!',
			'posts' => $posts
		];

		$this->view('pages/index', $data);
	}

  public function about() {
		$data = [
			'name' => "Ilyas"
		];
		$this->view('pages/about', $data);
  }
}