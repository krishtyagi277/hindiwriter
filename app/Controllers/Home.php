<?php

namespace App\Controllers;

class Home extends BaseController
{  
	private $gateway;
	public function __construct() {
		$this->gateway = new \Braintree\Gateway([
			'environment' => 'sandbox',
			'merchantId' => 'hytcvc86y37dd699',
			'publicKey' => 'mpmb3j8m4bxwqn3j',
			'privateKey' => 'dfab0ddb1e1c2d928bc2809a7b713505'
		]);
   }
     

	public function index()
	{
		
		return view('Home/index');
	}

	public function main(){
		return view('Home/main');
	}

	public function detail($id){
        $model = new \App\Models\NavigationNodeModel;
		$pageData = $model->find($id);
		$data = $model->where('parent_node', $id)->orderBy('priority', 'asc')->findAll();
		$parentNode = $model->find($pageData['parent_node']);
		return view('Home/boxPage', ['nodes'=>$data, 'pageData'=>$pageData, 'parentNode'=>$parentNode]);
	}

	public function details($id){
		$model = new \App\Models\NavigationNodeModel;
		$pageData = $model->find($id);
		$data = $model->where('parent_node', $id)->findAll();
		$parentNode = $model->find($pageData['parent_node']);
		return view('Home/boxPage2', ['nodes'=>$data, 'pageData'=>$pageData, 'parentNode'=>$parentNode]);
	}

	public function detailPage($id){
		$model = new \App\Models\NavigationNodeModel;
		$detailPageDescriptionModel = new \App\Models\DetailPageDescriptionModel;
		$detailPageImagesModel = new \App\Models\DetailPageImagesModel;


		$pageData = $model->find($id);
		$data = $model->where('parent_node', $id)->findAll();
		$parentNode = $model->find($pageData['parent_node']);
        
		$detailPageDescriptionData =  $detailPageDescriptionModel->where('parent_node', $id)->find();
		$detailPageImagesData = $detailPageImagesModel->where('parent_node', $id)->find();

		return view('Home/detailPage', ['nodes'=>$data, 'pageData'=>$pageData, 'parentNode'=>$parentNode,
		       'detailPageDescriptionData'=> $detailPageDescriptionData, 'detailPageImagesData'=>$detailPageImagesData]);
	}


	public function gallery(){
		$model = new \App\Models\GalleryModel;
		$kaviData =  $model->where('parent', 'kavi')->find();
		$abharData =  $model->where('parent', 'abhar')->find();
		$annualfestData =  $model->where('parent', 'annualfest')->find();
		$hindifestData =  $model->where('parent', 'hindifest')->find();
		$holifestData =  $model->where('parent', 'holifest')->find();
		$rewardsData =  $model->where('parent', 'rewards')->find();
		
		return view('Home/gallery2', ['kaviData'=>$kaviData, 'abharData'=>$abharData, 'annualfestData'=>$annualfestData,
		'hindifestData'=>$hindifestData,'holifestData'=>$holifestData, 'rewardsData'=>$rewardsData
		]);
	}

	public function galleryPage($id){
		$model = new \App\Models\NavigationNodeModel;
		$detailPageDescriptionModel = new \App\Models\DetailPageDescriptionModel;
		$detailPageImagesModel = new \App\Models\DetailPageImagesModel;


		$pageData = $model->find($id);
		$data = $model->where('parent_node', $id)->findAll();
		$parentNode = $model->find($pageData['parent_node']);
        
		$detailPageDescriptionData =  $detailPageDescriptionModel->where('parent_node', $id)->find();
		$detailPageImagesData = $detailPageImagesModel->where('parent_node', $id)->find();

		return view('Home/galleryPage', ['nodes'=>$data, 'pageData'=>$pageData, 'parentNode'=>$parentNode,
		       'detailPageDescriptionData'=> $detailPageDescriptionData, 'detailPageImagesData'=>$detailPageImagesData]);
	}

	public function introPage($id){
		$model = new \App\Models\MembersModel;
		$pageData = $model->find($id);
		return view('Home/introductions/introductionPage'.$id, [ 'pageData'=>$pageData]);
	}

	public function members(){
        $model = new \App\Models\MembersModel;
		$member1Data  = $model->where('parent_node', 'member-1')->orderBy('priority', 'asc')->findAll();
		$member2Data  = $model->where('parent_node', 'member-2')->orderBy('priority', 'asc')->findAll();
		$member3Data  = $model->where('parent_node', 'member-3')->orderBy('priority', 'asc')->findAll();
		$member4Data  = $model->where('parent_node', 'member-4')->orderBy('priority', 'asc')->findAll();
		
		return view('Home/member', ['member1Data' => $member1Data, 'member2Data' => $member2Data, 'member3Data' => $member3Data, 'member4Data' => $member4Data] );
	}


	public function payment(){
		$fullName = $this->request->getPost('full_name');
		$email = $this->request->getPost('email');
		$amount = $this->request->getPost('amount');
		$currency = $this->request->getPost('currency');
		$clientToken = $this->gateway->clientToken()->generate();
		
	    return view('Home/payment', ['clientToken' => $clientToken, 'fullName'=> $fullName, 'émail' => $email, 'amount'=>$amount,'currency'=>$currency]);
	}

	public function paymentSubmit(){

		$amount = $_POST['amount'];
		$nonceFromTheClient = $_POST["payment_method_nonce"];

		$result = $this->gateway->transaction()->sale([
			'amount' => $amount,
			'paymentMethodNonce' => $nonceFromTheClient,
			'options' => [
			  'submitForSettlement' => True
			]
		  ]);

		  
if ($result->success) {
	return redirect()->to('/home/donation/'.$result->transaction->id); 
    //return view('Home/forms/donationPage', ['transaction'=> $result->transaction->id]);
} else if ($result->transaction) {
    print_r("Error processing transaction:");
    print_r("\n  code: " . $result->transaction->processorResponseCode);
    print_r("\n  text: " . $result->transaction->processorResponseText);
} else {
    print_r("Validation errors: \n");
    print_r($result->errors->deepAll());
}
		
		return $result;
	}


	// facebook-live page
	public function facebookLive() {

		return view("Home/facebooklive");
	}

	public function ourbooks() {

		return view("Home/ourBooks");
	}

	public function invitations(){
		$model = new \App\Models\InvitationsModel;
		$data = $model->orderBy('created_at', 'desc')->findAll();
		return view("Home/invitationLetters", ['data'=>$data]);
	}

	public function becomesponser(){
		return view("Home/forms/sponserPage");
	}

	public function donation($transaction = null){
		return view('Home/forms/donationPage', ['transaction'=>$transaction]);
		
	}
    
	public function becomemember(){
		return view("Home/forms/becomeMember.php");
	}

	public function contactUs(){
		return view("Home/forms/contactUsPage.php");
	}

	public function videogallery() {
		return view("Home/videoGallery.php");
	}

	public function audiogallery() {
		return view("Home/audioPage.php");
	}

	public function newspaper() {
		$model = new \App\Models\NewspaperModel;
		$data = $model->where('parent_node', 'newspaper1')->findAll();
		$data2 = $model->where('parent_node', 'newspaper2')->findAll();
		return view("Home/newspaperPage.php", ['data'=>$data, 'data2'=>$data2]);
	}

	public function subscribeEmail(){
        $subscribeModel = new \App\Models\SubscribeModel;
		
		

		$emailId = $this->request->getGet('email');
		$email = service('email');
		$email->setTo($emailId);
		$email->setSubject('Thanks for subscribing us');
		$data = view('emails/subscribeEmail.php');
		$email->setMessage($data);
		
		if($email->send()){
			$resp = array("message"=>"email send", "flag"=>true);
			$this->response->setContentType('application/json');

			$subscribeModel->insert([
				'email' => $this->request->getGet('email'),
				'status' =>"success"
			]);
			return json_encode($resp);
			
		} else {
			$resp = array("message"=>"error", "flag"=>false);
			$this->response->setContentType('application/json');
			$subscribeModel->insert([
				'email' => $emailId,
				'status' =>"fail"
			]);
			return json_encode($resp);
		}
	}

	public function sponserEmail(){
		$sponserModel = new \App\Models\SponsersModel;
		
		$emailId = $this->request->getGet('email');
		$type = $this->request->getGet('type');
		$name = $this->request->getGet('name');
		$number = $this->request->getGet('phone_no');
		$website = $this->request->getGet('website');
		$logo = $this->request->getGet('image');
        

		$email = service('email');
		$email->setTo($emailId);
		$email->setSubject('Sponser Email');
		
		$data = view('emails/sponserEmail.php');
		$email->setMessage($data);
	
		
		if($email->send()){
			$resp = array("message"=>"email send", "flag"=>true);
			$this->response->setContentType('application/json');
			$sponserModel->insert([
				'email'=>$emailId,
				'type'=>$type,
				'name'=>$name,
				'number'=>$number,
				'website'=>$website,
				'logo'=>$logo,
				'status' =>"success"
			]);
			return json_encode($resp);
			
		} else {
			$resp = array("message"=>"error", "flag"=>false);
			$sponserModel->insert([
				'email'=>$emailId,
				'type'=>$type,
				'name'=>$name,
				'number'=>$number,
				'website'=>$website,
				'logo'=>$logo,
				'status' =>"fail"
			]);
			$this->response->setContentType('application/json');
			return json_encode($resp);
		}
	}

	public function memberEmail(){
		$emailId = $this->request->getGet('email');
		$email = service('email');
		$email->setTo($emailId);
		$email->setSubject('Member Email');
		
		$data = view('emails/memberEmailPage.php');
		$email->setMessage($data);
		
		if($email->send()){
			$resp = array("message"=>"email send", "flag"=>true);
			$this->response->setContentType('application/json');
			return json_encode($resp);
			
		} else {
			$resp = array("message"=>"error", "flag"=>false);
			$this->response->setContentType('application/json');
			return json_encode($resp);
		}
	}

	public function donationEmail(){
		$emailId = $this->request->getGet('email');
		$email = service('email');
		$email->setTo($emailId);
		$email->setSubject('Donation Email');
		
		$data = view('emails/donationEmailPage.php');
		$email->setMessage($data);
		
		if($email->send()){
			$resp = array("message"=>"email send", "flag"=>true);
			$this->response->setContentType('application/json');
			return json_encode($resp);
			
		} else {
			$resp = array("message"=>"error", "flag"=>false);
			$this->response->setContentType('application/json');
			return json_encode($resp);
		}
	}

	public function contactusEmail(){
		$emailId = $this->request->getGet('email');
		$email = service('email');
		$email->setTo($emailId);
		$email->setSubject('Contactus Email');
		
		$data = view('emails/contactusEmailPage.php');
		$email->setMessage($data);
		
		if($email->send()){
			$resp = array("message"=>"email send", "flag"=>true);
			$this->response->setContentType('application/json');
			return json_encode($resp);
			
		} else {
			$resp = array("message"=>"error", "flag"=>false);
			$this->response->setContentType('application/json');
			return json_encode($resp);
		}
	}


	public function calendar(){
		return view('Home/googlecalendar');
	}

	public function wellWishes(){
		return view("Home/wellWishesPage");
	}

	public function testimonial(){
		return view("Home/testimonialPage");
	}

	public function starenergy(){
		return view("Home/starEnergyPage");
	}
	
	public function sahityakunj(){
		return view("Home/sahityakunjPage");
	}
}