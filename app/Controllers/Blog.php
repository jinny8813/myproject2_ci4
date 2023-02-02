<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        if($this->isLogin()){
            $blogModel = new BlogModel();
            $data['blogs'] = $blogModel->orderBy('id', 'DESC')->findAll();
            return view('pages/bloghome',array_merge($this->memberData,$data)); 
        }else{
            $blogModel = new BlogModel();
            $data['blogs'] = $blogModel->orderBy('id', 'DESC')->findAll();
            return view('pages/bloghome',$data);
        }
    }

    public function createBlog()
    {
        if($this->isLogin()){
            return view('pages/createblog',$this->memberData);
        }else{
            return view('pages/login');
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

    public function showMore($id)
    {
        if($this->isLogin()){
            $blogModel = new BlogModel();
            $data['blogs'] = $blogModel->find($id);
            return view("pages/singleblog",array_merge($this->memberData,$data)); 
        }else{
            $blogModel = new BlogModel();
            $data['blogs'] = $blogModel->find($id);
            return view('pages/bloghome',$data);
        }
    }

    public function personal()
    {
        if($this->isLogin()){
            $blogModel = new BlogModel();
            $data['blogs'] = $blogModel->where('authorId', $this->memberData['userId'])->orderBy('id', 'DESC')->findAll();
            if($data){
                return view('pages/personal',array_merge($this->memberData,$data));
            }else{
                $err=['error_messages'=>"尚未發表文章",
                'status_code'=>400];
                return view('pages/personal',array_merge($this->memberData,$err));
            }
        }else{
            return view('pages/login');
        }
    }
}
