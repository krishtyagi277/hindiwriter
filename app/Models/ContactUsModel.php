<?php

namespace App\Models;

class ContactUsModel extends \CodeIgniter\Model
{
   protected $table = 'contactus';
   
   protected $allowedFields = [ 'id','name','email', 'contactnumber','subject','message','status','created_at'];
}