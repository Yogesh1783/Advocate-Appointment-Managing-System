 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	public function client()
	{
		$this->load->view('header_ci');
		$this->load->view('client');
		$this->load->view('footer');
		
	}
	public function advocatelist_ci()
	{
		$this->load->view('header_ci');
		$data['advocates']=$this->Admin_model->getAdvocateList();
		$this->load->view('advocatelist_ci',$data);
		$this->load->view('footer');
	}
	public function addadvocate_ci()
	{
		$this->load->view('header_ci');
		$this->load->view('addadvocate_ci');
		$this->load->view('footer');
	}

public function chat()
    {
        $this->load->view('header_ci');
        $this->load->view('chat');
        $this->load->view('footer');
        
    }
	public function insertAdvocate()
	{
		
	
		$this->Client_model->insertAdvocate();
	
	}
	public function updateAdvocate($id)
	{
		$this->Admin_model->updateAdvocate($id);
		
	}
	public function deleteAdvocate($id)
	{
		$this->Admin_model->deleteAdvocate($id);
	}
	public function doctor_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('doctor_pt');
		$this->load->view('footer');
	}
	public function addappointment_ci()
	{
		$this->load->view('header_ci');
		$this->load->view('addappointment_ci');
		$this->load->view('footer');
	}



	public function appointmentlist_ci()
	{
		$this->load->view('header_ci');
		$data['appointments']=$this->Client_model->getAppointmentList();
		$this->load->view('appointmentlist_ci',$data);
		$this->load->view('footer');
	}
	public function update_appointment_ci($id)
	{
		$this->load->view('header_ci');
		$data['appointment']=$this->Client_model->getByIdAppointmentList($id);
		$this->load->view('update_appointment_ci',$data);
		$this->load->view('footer');
	}
	public function index()
		{

			$sender_email = "ydp143452@gmail.com";
			$user_password = "wrvoyjsyclimfprv";
			$username = "Y P";
			$receiver_email = $this->input->post("AppointmentClientAdvocateEmail");
			$subject = "Welcome to Advocate Management System";
			$message =  "Appointment Booked Please Login and Check It";
			
			$this->emailConfig();

			// Sender email address
			$this->email->from($sender_email, $username);
			// Receiver email address.for single email
			$this->email->to($receiver_email);
			//send multiple email
			$this->email->to( $this->input->post("AppointmentClientAdvocateEmail"));
			// Subject of email
			$this->email->subject($subject);
			// Message in email
			$this->email->message($message);
			// It returns boolean TRUE or FALSE based on success or failure
			
			$mail = ($this->email->send()) ? 		$this->Client_model->insertAppointment() : "Failed" ;
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
	/*public function insertAppointment()
	{
		$this->Client_model->insertAppointment();
	}*/
	public function updateAppointment($id)
	{
		$this->Client_model->updateAppointment($id);
	}
	public function deleteAppointment($id)
	{
		$this->Client_model->deleteAppointment($id);
	}
public function insertUser()
	{
		$this->Client_model->insertUser();
	}
	public function prescriptionlist_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('prescriptionlist_pt');
		$this->load->view('footer');
	}

	public function admithistory_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('admithistory_pt');
		$this->load->view('footer');
	}

	public function bloodbank_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('bloodbank_pt');
		$this->load->view('footer');
	}
	public function donorlist_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('donorlist_pt');
		$this->load->view('footer');
	}

	public function invoice_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('invoice_pt');
		$this->load->view('footer');
	}
	public function paymenthistory_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('paymenthistory_pt');
		$this->load->view('footer');
	}
	public function profile_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('profile_pt');
		$this->load->view('footer');
	}
	public function changepwd_pt()
	{
		$this->load->view('header_ci');
		$this->load->view('changepwd_pt');
		$this->load->view('footer');
	}
	public function Login_ci()
	{
		
		$this->load->view('Login_ci');
	
	}
	public function login()
 {
  $this->load->view('login_ci');
 }
 public function verifylogin(){
 
  $this->form_validation->set_rules('ClientEmail','ClientEmail','required');
  $this->form_validation->set_rules('ClientPassword','ClientPassword','required');
  if($this->form_validation->run())
  {
   
    
    $ClientEmail=$this->input->post('ClientEmail');
    $ClientPassword=$this->input->post('ClientPassword');
    $this->load->model('Client_model');
    $validate=$this->Client_model->login($ClientEmail,$ClientPassword);
    if($validate)
    {
      
      $_SESSION['ClientEmail']=$validate->ClientEmail;
      redirect('/client/client');
    }
    else
    {
      $this->session->set_flashdata('error','Invalid Login Details.please try again.');
      redirect('client/login_ci');
    }
  }else
  {
    $this->load->view('login_ci');
  }

 }
 public function logout(){
  $this->session->sess_destroy();
  redirect('/client/Login_ci','refresh');
}

	//End of client module
}