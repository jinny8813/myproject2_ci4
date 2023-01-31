<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['email', 'password','nickname'];

    public function getMember($email,$password)
    {
        $memberData = $this->asArray()
                            ->where(['email' => $email,'password' =>$password])
                            //->where(['account' => $account,'password' => $password])
                            ->first();

        return $memberData ?? false;
    }
}