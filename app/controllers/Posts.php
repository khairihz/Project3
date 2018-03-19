<?php

    class Posts extends Controller {
        public function __construct(){
            echo 'Posts loaded';
        }
        
        public function index(){
            $this->view('hello');
        }
    }