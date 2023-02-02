<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['userId','email', 'password','nickname'];

    public function getMember($email,$password)
    {
        $memberData = $this->asArray()
                            ->where(['email' => $email,'password' =>$password])
                            ->first();

        return $memberData ?? false;
    }
}