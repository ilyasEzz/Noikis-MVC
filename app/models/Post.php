<?php

class Post {
  private $model;

  public function __construct() {
    $this->model = new Model;

  }

  public function getPosts() {
    $this->model->query("SELECT * FROM posts");
    return $this->model->getAll();
  }

} 