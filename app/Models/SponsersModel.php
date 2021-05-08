<?php

namespace App\Models;

class SponsersModel extends \CodeIgniter\Model
{
   protected $table = 'sponsers';

   protected $allowedFields = ['type', 'name','email', 'number','website','logo','status'];
}