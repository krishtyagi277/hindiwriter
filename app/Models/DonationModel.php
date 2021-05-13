<?php

namespace App\Models;

class DonationModel extends \CodeIgniter\Model
{
   protected $table = 'donations';
   
   protected $allowedFields = [ 'uid','name','email', 'number','amount','currency','description','payment_id','status','payload'];
}