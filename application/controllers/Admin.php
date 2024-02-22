  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function send_adv()
	{
		$this->load->view('header_ad');
		$this->load->view('sendemail');
		$this->load->view('footer');
	}
	public function send_ci()
	{
		$this->load->view('header_ad');
		$this->load->view('sendemail_ci');
		$this->load->view('footer');
	}

	public function index()
		{

			$sender_email = "ydp143452@gmail.com";
			$user_password = "wrvoyjsyclimfprv";
			$username = "Y P";
			$receiver_email = $this->input->post("mailTo");
			$subject =  $this->input->post("mailsubject");
			$message =  $this->input->post("body");
			
			$this->emailConfig();

			// Sender email address
			$this->email->from($sender_email, $username);
			// Receiver email address.for single email
			$this->email->to($receiver_email);
			//send multiple email
			$this->email->to( $this->input->post("mailTo"));
			// Subject of email
			$this->email->subject($subject);
			// Message in email
			$this->email->message($message);
			// It returns boolean TRUE or FALSE based on success or failure
			
			$mail = ($this->email->send()) ? 		$this->Admin_model->insertMessage() : "Failed" ;
			echo $this->email->print_debugger();
			
			echo $mail;
		}

		
		/**
		 * Email Configurations
		 * ** Please deactivate Second-step verification for the smtp_user **
		 */
		private function emailConfig()
		{
			$config = array(
				'protocol' 	=> 'smtp' , 
				'smtp_host' => 'ssl://smtp.googlemail.com' , 
				'smtp_port' => 465 , 
				'smtp_user' => 'ydp143452@gmail.com' ,
				'smtp_pass' => 'wrvoyjsyclimfprv',
				'mailtype'	=> 'html', 
				'charset' 	=> 'utf-8', 
				'newline' 	=> "\r\n",  
				'wordwrap' 	=> TRUE 
				);
			
			// Load email library and passing configured values to email library
			$this->load->library('email',$config);
		}



	public function admin()
	{
		$this->load->view('header_ad');
		$this->load->view('admin');
		$this->load->view('footer');
		
	}

	//transaction for controller
	public function insertPayment_adv(){
		$this->Admin_model->insertPayment_adv();

	}
public function updatePayment_adv($id){
		$this->Admin_model->updatePayment_adv($id);
	
	}
	public function deletePayment_adv($id){
		$this->Admin_model->deletePayment_adv($id);
	
	}

public function paymentdetails()
	{
		$this->load->view('header_ad');
		$data['payments']=$this->Admin_model->getPaymentList();
		$this->load->view('paymentdetails',$data);
		$this->load->view('footer');
	}
	public function update_paymentdetails($id)
	{
		$this->load->view('header_ad');
		$data['payment']=$this->Admin_model->getByIdPaymentList($id);
		$this->load->view('update_paymentdetails',$data);
		$this->load->view('footer');
	}

	public function insertTransaction(){
		$this->Admin_model->insertTransaction();

	}
public function updateTransaction($id){
		$this->Admin_model->updateTransaction($id);
	
	}
	public function deleteTransaction($id){
		$this->Admin_model->deleteTransaction($id);
	
	}
	public function transactiondetails()
	{
		$this->load->view('header_ad');
		$data['transactions']=$this->Admin_model->getTransactionList();
		$this->load->view('transactiondetails',$data);
		$this->load->view('footer');
	}
	public function update_transactiondetails($id)
	{
		$this->load->view('header_ad');
		$data['transaction']=$this->Admin_model->getByIdTransactionList($id);
		$this->load->view('update_transactiondetails',$data);
		$this->load->view('footer');
	}

	






	public function deleteAppointment($id)
	{
		$this->Client_model->deleteAppointment($id);
	}

	//Admin module begins
	public function messagelist_adv()
	{
		$this->load->view('header_ad');
		$data['messages']=$this->Admin_model->getMessageList();
		$this->load->view('messagelist_adv',$data);
		$this->load->view('footer');
	}
	public function update_message_adv($id)
	{
		$this->load->view('header_ad');
		$data['messages']=$this->Admin_model->getByIdMessageList($id);
		$this->load->view('update_message_adv',$data);
		$this->load->view('footer');
	}
	
	public function advocatelist_ad()
	{
		$this->load->view('header_ad');
		$data['advocates']=$this->Admin_model->getAdvocateList();
		$this->load->view('advocatelist_ad',$data);
		$this->load->view('footer');
	}
	public function insertAdvocate()
	{
		

		$config=[
			'upload_path'=>'./public/upload/image/',
			'allowed_types'=>'jpg|png|gif',
			'max_size'=>'2048000'
		];

$this->load->library('upload', $config);
if($this->upload->do_upload('AdvocateImage'))
          {
                	$data=$this->upload->data();
                    echo "<pre>";print_r($this->upload->data());
                }
                else
                {
                    echo "Error";
                }



	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
	$this->form_validation->set_rules('AdminAdvocateEmail','AdminAdvocateEmail','required|is_unique[advocate_ad.AdminAdvocateEmail]');
	if($this->form_validation->run()==TRUE){
		$this->Admin_model->insertAdvocate();
	}
	else
	{
		redirect('admin/addadvocate_ad');
	}
	
	}
	public function updateAdvocate($id)
	{
		$this->Home_model->updateAdvocate($id);
		
	}
	public function deleteAdvocate_home($id)
	{
		$this->Home_model->deleteAdvocate($id);
	}
		public function deleteAdvocate($id)
	{
		$this->Admin_model->deleteAdvocate($id);
	}

	
	
	
	
	public function insertClient()
	{
			$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
	$this->form_validation->set_rules('ClientEmail','ClientEmail','required|is_unique[addclient_ad.ClientEmail]');
	if($this->form_validation->run()==TRUE){
		$this->Admin_model->insertClient();
	}
	else
	{
		redirect('admin/addclient_ad');
	}
	}

	
	
	public function updateClient($id)
	{
		$this->Admin_model->updateClient($id);
	}
	public function deleteClient($id)
	{
		$this->Admin_model->deleteClient($id);
	}
	
	
		public function insertAdmin()
	{
		$this->Admin_model->insertDonor();
	}
	public function updateAdmin($id)
	{
		$this->Admin_model->updateAdmin($id);
	}
	public function insertReport()
	{
		$this->Admin_model->insertReport();
	}
	public function updateReport($id)
	{
		$this->Admin_model->updateReport($id);
	}
	public function deleteReport($id)
	{
		$this->Admin_model->deleteReport($id);
	}
	public function insertProfile()
	{
		$this->Admin_model->insertProfile();
	}
	public function updateProfile($id)
	{
		$this->Admin_model->updateProfile($id);
	}
	public function deleteProfile($id)
	{
		$this->Admin_model->deleteProfile($id);
	}
	public function insertUser()
	{
		$this->Admin_model->insertUser();
	}
	
	
	public function profile_save_ad()
	{
		$this->load->view('header_ad');
		$data['profiles']=$this->Admin_model->getAdminList();
		$this->load->view('profile_save_ad',$data);
		$this->load->view('footer');
	}
	public function profile_ad($id)
	{
		$this->load->view('header_ad');
		$data['profile']=$this->Admin_model->getByIdAdminList($id);
		$this->load->view('profile_ad',$data);
		$this->load->view('footer');
	}
	
	public function addadvocate_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('addadvocate_ad');
		$this->load->view('footer');
	}
	public function update_advocate_ad($id)
	{
		$this->load->view('header_ad');
		$data['advocate']=$this->Admin_model->getByIdAdvocateList($id);
		$this->load->view('update_advocate_ad',$data);
		$this->load->view('footer');
	}
	
	public function addclient_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('addclient_ad');
		$this->load->view('footer');
	}
	public function update_client_ad($id)
	{
		$this->load->view('header_ad');
		$data['client']=$this->Admin_model->getByIdClientList($id);
		$this->load->view('update_client_ad',$data);
		$this->load->view('footer');
	}
	
	public function Clientlist_ad()
	{
		$this->load->view('header_ad');
		$data['clients']=$this->Admin_model->getClientList();
		$this->load->view('Clientlist_ad',$data);
		$this->load->view('footer');
	}
	
	public function Verifyadvocate()
	{
		$this->load->view('header_ad');
		$data['advocates']=$this->Home_model->getVerifyAdvocateList();
		$this->load->view('Verifyadvocate',$data);
		$this->load->view('footer');
	}
	public function Updateadvocate_ad($id)
	{
		$this->load->view('header_ad');
		$data['advocate']=$this->Home_model->getByIdVerifyAdvocateList($id);
		$this->load->view('Updateadvocate_ad',$data);
		$this->load->view('footer');
	}
	public function Verifyclient()
	{
		$this->load->view('header_ad');
		$data['clients']=$this->Home_model->getVerifyClientList();
		$this->load->view('Verifyclient',$data);
		$this->load->view('footer');
	}
	public function Updateclient_ad($id)
	{
		$this->load->view('header_ad');
		$data['client']=$this->Home_model->getByIdVerifyClientList($id);
		$this->load->view('Updateclient_ad',$data);
		$this->load->view('footer');
	}


	

	
	
	
	

	public function appointmentlist_ad()
	{
		$this->load->view('header_ad');
		$data['appointments']=$this->Admin_model->getAppointmentList();
		$this->load->view('appointmentlist_ad',$data);
		$this->load->view('footer');
	}

	public function update_appointment_ad($id)
	{
		$this->load->view('header_dr');
		$data['appointment']=$this->Doctor_model->getByIdAppointmentList($id);
		$this->load->view('update_appointment_ad',$data);
		$this->load->view('footer');
	}

	public function viewpayment_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('viewpayment_ad');
		$this->load->view('footer');
	}
	

	
	
	public function noticeboard_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('noticeboard_ad');
		$this->load->view('footer');
	}
	public function addnotice_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('addnotice_ad');
		$this->load->view('footer');
	}
	public function systemsetting_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('systemsetting_ad');
		$this->load->view('footer');
	}
	public function pharselist_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('pharselist_ad');
		$this->load->view('footer');
	}
	public function addpharse_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('addpharse_ad');
		$this->load->view('footer');
	}
	public function addlanguage_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('addlanguage_ad');
		$this->load->view('footer');
	}
	
	public function changepwd_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('changepwd_ad');
		$this->load->view('footer');
	}
	public function Login_ad()
	{
		
		$this->load->view('Login_ad');
	
	}

	public function login()
 {
  $this->load->view('login_ad');
 }
 public function verifylogin(){
 
  $this->form_validation->set_rules('AdminEmail','AdminEmail','required');
  $this->form_validation->set_rules('AdminPassword','AdminPassword','required');
  if($this->form_validation->run())
  {
   
    
    $AdminEmail=$this->input->post('AdminEmail');
    $AdminPassword=$this->input->post('AdminPassword');
    $this->load->model('Admin_model');
		$validate=$this->Admin_model->login($AdminEmail,$AdminPassword);
    if($validate)
    {
      
            $_SESSION['AdminEmail']=$validate->AdminEmail;
      redirect('/admin/admin');
    }
    else
    {
      $this->session->set_flashdata('error','Invalid Login Details.please try again.');
      redirect('login_ad');
    }
  }else
  {
    $this->load->view('login_ad');
  }

 }
 public function logout(){
  $this->session->sess_destroy();
  redirect('/admin/Login_ad','refresh');
}
	
	
}


