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
		$d['v'] = 'checkout';
		$this->load->view('checkout');
	}
	
	public function c_submit()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

	

		//Validating Email Field
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		

		

		if ($this->form_validation->run() == FALSE) {
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
		$customer = Stripe_Customer::create(array(
			'source'   => $_POST['stripeToken'],
			'email'    => $_POST['email'],
			'plan'     => "starter",
		));
	
		$charge = Stripe_Charge::create(array(		
			'customer'    => $customer->id,		
			  "amount" => $amount_cents,
			  "currency" => "usd",
			 // "source" => $_POST['stripeToken'],
			  "description" => $description)			  
		);

		if ($charge->card->address_zip_check == "fail") {
			throw new Exception("zip_check_invalid");
		} else if ($charge->card->address_line1_check == "fail") {
			throw new Exception("address_check_invalid");
		} else if ($charge->card->cvc_check == "fail") {
			throw new Exception("cvc_check_invalid");
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
	
	echo "<BR>Stripe Payment Status : ".$result;
	
	echo "<BR>Stripe Response : ";
	
	print_r($charge); exit;	
		//Setting values for tabel columns
		$data = array(
		'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'city' => $this->input->post('city'),
		//'street_address' => $this->input->post('street_address'),
		//'street_address_2' => $this->input->post('street_address_2'),
		'state' => $this->input->post('state'),
		'country' => $this->input->post('country'),
		'zip_code' => $this->input->post('zipcode'),
		'email' => $this->input->post('email'),
		'phone' => $this->input->post('phone'),
		//'theme_name' => $this->input->post('theme_name'),
		//'theme_price' => $this->input->post('theme_price'),
		//'plan_name' => $this->input->post('plan_name'),
		//'plan_price' => $this->input->post('daddress'),
		//'phone' => $this->input->post('phone'),
		//'addons' => $this->input->post('dname'),
		'total' => $this->input->post('total')
		//'payment_status' => $this->input->post('payment_status')
		
		);
		//Transfering data to Model
		
		$this->db->insert('cg_orders', $data);

		//$this->insert_model->form_insert($data);
		$data['message'] = 'Data Inserted Successfully';
		$data['v']='pay';
		//Loading View
		$this->load->view('pay', $data);
		}
	}
	

}
}