<?php
namespace App\Controllers;


class UserController extends Controller{

    public function index(){
        return $this->view('users.index');
    }
    public function show($id){
        return"show";
    }
    public function create(){
        return"create";
    }
    public function store(){
        return"store";
    }
    public function edit($id){
        return"edit";
    }
    public function update($id){
        return"update";
    }
    public function destroy($id){
        return"delete";
    }

}

