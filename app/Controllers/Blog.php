<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        if($this->isLogin()){
            return view('pages/bloghome',$this->memberData);
        }else{
            return view('pages/bloghome');
        }
    }
    public function createBlog()
    {
        if($this->isLogin()){
            return view('pages/createblog',$this->memberData);
        }else{
            return view('pages/createblog');
        }
    }

    public function doCreateBlog()
    {
        if($this->isLogin()){
        $authorID = $this->request->getPost("authorID");
        $title = $this->request->getPost("title");
        $category = $this->request->getPost("category");
        $content = $this->request->getPost("content");
        $blogModel = new BlogModel();
        if( $category == "no" ){
            $err=['error_messages'=>"請選擇文章分類",
            'status_code'=>400];
            return view('pages/createblog',array_merge($this->memberData,$err)); 
            //return $this->fail("需帳號密碼等資料進行註冊",400);
            //echo json_encode($err);
        }
        $values = [
            'authorId'=>$authorID,
            'title'=>$title,
            'category'=>$category,
            'content'=>$content,
        ];
        $blogModel->insert($values);
        $arr=['success_messages'=>"發文成功!!將跳轉回所有文章頁面",
            'status_code'=>200];
        //echo json_encode($arr);
        return $this->response->setJSON($arr);
        // return view('pages/bloghome');
        }else{
            return view('pages/login');
        }                
    }
}
