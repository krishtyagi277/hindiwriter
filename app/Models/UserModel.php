<?php

namespace App\Models;

class UserModel extends \CodeIgniter\Model
{
   protected $table = 'user';
   
   protected $allowedFields = [ 'id','email','password','confirm_password'];
}