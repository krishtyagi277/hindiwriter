<?php

namespace App\Models;

class SubscribeModel extends \CodeIgniter\Model
{
   protected $table = 'subscribe';

   protected $allowedFields = ['email', 'status'];
}