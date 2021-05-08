<?php

namespace App\Controllers;

class Admin extends BaseController
{  
	public function main()
	{   
        $subscribeModel = new \App\Models\SubscribeModel;
		$data = $subscribeModel->findAll();
		
		return view('Admin/main', ['subscribersData'=> $data]);
	}

    public function sponsers()
	{   
        $sponserModel = new \App\Models\SponsersModel;
		$data = $sponserModel->findAll();
		
		return view('Admin/sponserPage', ['sponsersData'=> $data]);
	}
}    