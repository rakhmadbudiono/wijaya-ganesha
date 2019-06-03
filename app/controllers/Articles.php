<?php

class Articles extends Controller {
    public function index(){
        $data['title'] = 'Articles';
        $this->view('templates/header', $data);
        $this->view('articles/index');
        $this->view('templates/footer');
    } 
}