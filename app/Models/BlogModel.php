<?php
namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    protected $primarykey = 'id';

    protected $allowedFields = ['id','authorId','category','title', 'content','createdAt'];

}