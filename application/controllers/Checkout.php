<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	  
		if(!empty($this->session->userdata('email'))){
		$this->load->model('Customer_M');
		$user=$this->Customer_M->userby_email($this->session->userdata('email'));
		$d['user'] = $user;
		$this->load->model('Region_M');
		$d['countries']=$this->Region_M->countriesList();
		
		$this->load->view('checkout',$d);
		} else {
		redirect('login');
		}
		
	}
	
	public function c_submit()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Email Field
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->post());
		$this->load->view('checkout');
		} else {
			
		require APPPATH.'stripe/Stripe.php';

	
		$params = array(
			"testmode"   => "on",
			"private_live_key" => "sk_live_xxxxxxxxxxxxxxxxxxxxx",
			"public_live_key"  => "pk_live_xxxxxxxxxxxxxxxxxxxxx",
			"private_test_key" => "sk_test_CcchYXRlEKh21JZZjlnKksMM",
			"public_test_key"  => "pk_test_aHaQRbKSUc5QaFZp7CmCcW8A"
		);

		if ($params['testmode'] == "on") {
			Stripe::setApiKey($params['private_test_key']);
			$pubkey = $params['public_test_key'];
		} else {
			Stripe::setApiKey($params['private_live_key']);
			$pubkey = $params['public_live_key'];
		}

		if(isset($_POST['stripeToken']))
		{
		$amount_cents = str_replace(".","","10.52");  // Chargeble amount
		$invoiceid = "14526321";                      // Invoice ID
		$description = "Invoice #" . $invoiceid . " - " . $invoiceid;
	
		try {
		
		//Create Customer:
		if(!empty($this->session->userdata('plan_id'))) {
		$customer = Stripe_Customer::create(array(
			'source'   => $_POST['stripeToken'],
			'email'    => $_POST['email'],
			'plan'     => $this->session->userdata('plan_id'),
		));
		}  else {
		$charge = Stripe_Charge::create(array(		
			  "amount" => $this->session->userdata('total')*100,
			  "currency" => "usd",
			   "source" => $_POST['stripeToken'],
			  "description" => $description)			  
		);

		if ($charge['card']['address_zip_check'] == "fail") {
			throw new Exception("zip_check_invalid");
		} else if ($charge['card']['address_line1_check'] == "fail") {
			throw new Exception("address_check_invalid");
		} else if ($charge['card']['cvc_check'] == "fail") {
			throw new Exception("cvc_check_invalid");
		}
		}
		// Payment has succeeded, no exceptions were thrown or otherwise caught				

		$result = "success";
	
		
	} catch(Stripe_CardError $e) {			

	$error = $e->getMessage();
		$result = "declined";

	} catch (Stripe_InvalidRequestError $e) {
		$result = "declined";		  
	} catch (Stripe_AuthenticationError $e) {
		$result = "declined";
	} catch (Stripe_ApiConnectionError $e) {
		$result = "declined";
	} catch (Stripe_Error $e) {
		$result = "declined";
	} catch (Exception $e) {

		if ($e->getMessage() == "zip_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "address_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "cvc_check_invalid") {
			$result = "declined";
		} else {
			$result = "declined";
		}		  
	}
	
	//echo "<BR>Stripe Payment Status : ".$result;
	
	//echo "<BR>Stripe Response : ";
	
	//print_r($charge); 
		//Setting values for tabel columns
		
	if(empty($this->session->userdata('plan_id'))) {
	$plan_id="Null";
	} 
	else {
	$plan_id=$this->session->userdata('plan_id');
	}
	if(empty($this->session->userdata('theme_id'))) {
	$theme_id="Null";
	} 
	else {
	$theme_id=$this->session->userdata('theme_id');
	}
	if(empty($this->session->userdata('addons_id'))) {
	$addons_id="Null";
	} 
	else {
	$addons_id=$this->session->userdata('addons_id');
	}
	$data = array(
	'first_name' => $this->input->post('first_name'),
	'last_name' => $this->input->post('last_name'),
	'city' => $this->input->post('city'),
	'address' => $this->input->post('address'),
	'street_address' => $this->input->post('street_address'),
	'state' => $this->input->post('state'),
	'country' => $this->input->post('country'),
	'zip_code' => $this->input->post('zipcode'),
	'email' => $this->input->post('email'),
	'phone' => $this->input->post('phone'),
	'plan_id' => $plan_id,
	'theme_id' => $theme_id,
	'addons_id' => $addons_id,
	'total' => $this->session->userdata('total'),
	'payment_status' => $result
	
	);
		//Transfering data to Model
		
		$this->db->insert('cg_orders', $data);
		$this->load->model('Customer_M');
		$this->Customer_M->temp_data($this->input->post());
		$this->session->unset_userdata('total');
		$this->session->unset_userdata('addons_id');
		$this->session->unset_userdata('theme_id');
		
		$this->session->unset_userdata('addons');
		$this->session->unset_userdata('plan_name');
		$this->session->unset_userdata('plan_price');
		$this->session->unset_userdata('theme');
		//$this->insert_model->form_insert($data);
	
		//Loading View
			if(!empty($this->session->userdata('plan_id'))) {
				$this->session->unset_userdata('plan_id');
		$this->session->set_flashdata('order_success','Congratulations! You have purchased plan!!');

		redirect('themes');
		}
		 else {
		$this->session->set_flashdata('order_success','Congratulations! Your payment is successfully completed!!');
		redirect('dashboard');
		}
		}
	}
	

}
}