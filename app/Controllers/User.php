<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        if($this->isLogin()){
            return view('pages/home',$this->memberData);
        }else{
            return view('pages/home');
        }
    }
    public function bloghome()
    {
        return view('pages/bloghome');
    }
    public function source()
    {
        return view('pages/source');
    }
    public function board()
    {
        return view('pages/board');
    }
    public function login()
    {
        return view('pages/login');
    }

    public function doLogin()
    {
        if($this->isLogin()){
            $err=['error_messages'=>"已登入",
            'status_code'=>403];
            return view('pages/personal',array_merge($this->memberData,$err));
            //return $this->fail("已登入",403);
        }

        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        if($email == null || $password == null){
            $err=['error_messages'=>"需帳號密碼進行登入",
            'status_code'=>400];
            return view('pages/login',$err);
            //return $this->fail("需帳號密碼進行登入",400);
        }

        $memberModel = new UserModel();
        $memberData = $memberModel->getMember($email,$password);
        
        if($memberData){
            $this->session->set("memberData",$memberData);
            $this->response->setStatusCode(200);
            return view('pages/personal',$memberData);
            return $this->response->setJSON([
                "msg" => "OK"
            ]);
        }else{
            $err=['error_messages'=>"帳號或密碼錯誤",
            'status_code'=>400];
            return view('pages/login',$err);
            //return $this->fail("帳號或密碼錯誤",400);
        }
    }
}
