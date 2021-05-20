<?php

namespace App\Controllers;

class Admin extends BaseController
{  
	public function main($id=null)
	{    if($id == null){
		return redirect()->to("/admin/login");
	   }
        $subscribeModel = new \App\Models\SubscribeModel;
		$data = $subscribeModel->findAll();
		
		return view('Admin/main', ['subscribersData'=> $data, 'id'=>$id],);
	}

    public function sponsers($id=null)
	{   if($id == null){
		return redirect()->to("/admin/login");
	   }
        $sponserModel = new \App\Models\SponsersModel;
		$data = $sponserModel->findAll();
		
		return view('Admin/sponserPage', ['sponsersData'=> $data, 'id'=>$id]);
	}

	public function login(){
		return view("Admin/login");
	}

	public function dologin(){
	   $userModel = new \App\Models\UserModel;
	   $email = $this->request->getPost('email');
	   $password = $this->request->getPost('password');
	   $userData = $userModel->where('email',$email)->where('password',$password)->find();
	   $emailId = null;
	   $id = null;
	   
	   foreach($userData as $row){
		 $emailId = $row['email'];
		 $id = $row['id'];
	   }

	   $subscribeModel = new \App\Models\SubscribeModel;
	   $data = $subscribeModel->findAll();

	   if($emailId == null){
		return redirect()->to("/admin/login");
	   }
		
	   return redirect()->to("/admin/main/".$id);
	   //return view('Admin/main', ['subscribersData'=> $data, 'email'=>$emailId]);
	}

	public function donations($id=null){
		if($id == null){
			return redirect()->to("/admin/login");
		   }
		$donationModel = new \App\Models\DonationModel;
		$data = $donationModel->findAll();
			
		return view('Admin/donations', ['donationData'=> $data, 'id'=>$id],);
	}
	
	public function subscribe($id=null){
		if($id == null){
			return redirect()->to("/admin/login");
		   }
			$subscribeModel = new \App\Models\SubscribeModel;
			$data = $subscribeModel->findAll();
			
			return view('Admin/main', ['subscribersData'=> $data, 'id'=>$id],);
	}

	public function registerMembers($id=null){
		if($id == null){
			return redirect()->to("/admin/login");
		   }
		   $regsiterModel = new \App\Models\RegisterMembersModel;
		   $data = $regsiterModel->findAll();
			
			return view('Admin/registermembers', ['membersData'=> $data, 'id'=>$id],);
	}

	public function contactUs($id=null){
		if($id == null){
			return redirect()->to("/admin/login");
		   }
		   $contactUsModel = new \App\Models\ContactUsModel;
		   $data = $contactUsModel->findAll();
			
			return view('Admin/contactus', ['contactUsData'=> $data, 'id'=>$id],);
	}

	public function logout(){

		return redirect()->to("/admin/login");
	}
}    