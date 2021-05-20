<?php

namespace App\Models;

class RegisterMembersModel extends \CodeIgniter\Model
{
   protected $table = 'registermembers';
   
   protected $allowedFields = [ 'id','firstname','lastname', 'email','writer','mobilenum','officenum','homenum','faxno','city','state','country','website','blog','password','links','donation','status','created_at'];
}