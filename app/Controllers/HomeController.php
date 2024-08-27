<?php 
namespace App\Controllers;
use App\Models\user;
class HomeController extends Controller{
 
    public function index(){
        $usermodel= new user();

        return $this->view('login');
    }

  
}