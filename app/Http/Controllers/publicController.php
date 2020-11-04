<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{

    public function index(){
        return view('home.home');
    }
    public  function create(){
        return 'Add user';
    }
    public function putCreate (){
        return 'put update';
    }
    public function patchCreate (){
        return 'patch update';
    }
    public function delete (){
        return 'Delete ';
    }
    public function love (){
        return 'I love Bangladesh ';
    }
    public function multiple ($id, $email){
        return $id. ' '.$email;
    }

}
