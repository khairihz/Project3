<?php
class Admin extends controller{
    public function __construct(){

    }
    public function index(){
        $data =['title'=>'Billet simple pour l\'alaska',
            'description'=>'Test'
            ];
        $this->view('admin/index',$data);
    }
}