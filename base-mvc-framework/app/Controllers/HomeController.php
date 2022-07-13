<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends BaseController{

    public function __construct(){
        $this->userModel = new User;
    }

    public function index(){
        $listUser = $this->userModel->getAll('user');
        return view('user-list', ['users' => $listUser]);
    }

    public function add(){
        return view('user-add');
    }

    public function store(){
        try{
            $this->userModel->save('user', [
                'email'     => $_POST['email'],
                'fullname'  => $_POST['fullname'],
                'address'   => $_POST['address']
            ]);
            return redirect('/');
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getUserAndGroup($id, $group){
        echo $id;
        echo $group;
    }

    public function getUser($id){
        echo $id;
    }

    public function delete($id){
        try{
            $this->userModel->delete('user', ['id' => $id]);
            return redirect('/');
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

}