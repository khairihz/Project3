<?php 
class Comments extends Controller{
    public function __construct(){
        $this->postModel = $this->model('Post');
        $this->commentModelModel = $this->model('CommentModel');
    }
    public function index(){
        $post = $this->postModel->getPostsById($id);
        $data = [
            'post' => $post
    ];
    $this->view('comments/index',$data);
    }
}