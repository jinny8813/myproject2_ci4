<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['email', 'password'];

    public function getMember($email,$password)
    {
        $memberData = $this->asArray()
                            ->where(['email' => $email,'password' => sha1($password)])
                            //->where(['account' => $account,'password' => $password])
                            ->first();

        return $memberData ?? false;
    }
}