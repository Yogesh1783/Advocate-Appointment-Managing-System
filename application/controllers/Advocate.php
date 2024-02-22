      
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advocate extends CI_Controller {
	

	public function Advocate()
	{
		$this->load->view('header_adv');

		$this->load->view('advocate');

		$this->load->view('footer');

		
	}
	public function delete()
	{
		$this->load->view('header_adv');

		$this->load->view('delete');

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
			
			$mail = ($this->email->send()) ? 		"Sucess" : "Failed" ;
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



	

	

	
	
	public function insertClient()
	{
		
		$this->Advocate_model->insertClient();
	}
	public function insertClient_adv($id)
	{
		
		$this->Advocate_model->insertClient_adv($id);
	}
	public function updateClient_adv($id)
	{
		
		$this->Advocate_model->updateClient_adv($id);
	}

	public function updateClient($id)
	{
		$this->Advocate_model->updateClient($id);
	}
	public function deleteClient($id)
	{
		$this->Advocate_model->deleteClient($id);
	}

	public function insertAppointment()
	{
		$this->Advocate_model->insertAppointment();
	}
	public function updateAppointment($id)
	{
		$this->Advocate_model->updateAppointment($id);
	}
	
	public function deleteAppointment($id)
	{
		$this->Advocate_model->deleteAppointment($id);
	}
	
	
	

		public function addclient_adv()
	{
		$this->load->view('header_adv');
		$this->load->view('addclient_adv');
		$this->load->view('footer');
	}
	public function update_client_adv($id)
	{
		$this->load->view('header_adv');
		$data['client']=$this->Advocate_model->getByIdClientList($id);
		$this->load->view('update_client_adv',$data);
		$this->load->view('footer');
	}
	public function client_adv($id)
	{
		$this->load->view('header_adv');
		$data['client']=$this->Advocate_model->getByIdClientList($id);
		$this->load->view('client_adv',$data);
		$this->load->view('footer');
	}

	public function Clientuser_adv()
	{
		$this->load->view('header_adv');
		$data['users']=$this->Advocate_model->getUserList();
		$this->load->view('Clientuser_adv',$data);
		$this->load->view('footer');
	}

	public function update_clientuseradv($id)
	{
		$this->load->view('header_adv');
		$data['user']=$this->Advocate_model->getByIdUserList($id);
		$this->load->view('update_clientuseradv',$data);
		$this->load->view('footer');
	}
	
	public function Clientlist_adv()
	{
		$this->load->view('header_adv');
		$data['clients']=$this->Advocate_model->getClientList();
		$this->load->view('Clientlist_adv',$data);
		$this->load->view('footer');
	}
	//Apointment module in doctor begins
	public function addappointment_adv()
	{
		$this->load->view('header_adv');
		$this->load->view('addappointment_adv');
		$this->load->view('footer');
	}
	

	
	public function appointmentlist_adv()
	{
		$this->load->view('header_adv');
		$data['appointments']=$this->Advocate_model->getAppointmentList();
		$this->load->view('appointmentlist_adv',$data);
		$this->load->view('footer');
	}
	
	public function update_appointment_adv($id)
	{
		$this->load->view('header_adv');
		$data['appointment']=$this->Advocate_model->getByIdAppointmentList($id);
		$this->load->view('update_appointment_adv',$data);
		$this->load->view('footer');
	}
	//End of appointment module in doctor 
	public function update_bed_dr($id)
	{
		$this->load->view('header_adv');
		$data['bed']=$this->Advocate_model->getByIdBedList($id);
		$this->load->view('update_bed_dr',$data);
		$this->load->view('footer');
	}
	
	public function bedlist_dr()
	{
		$this->load->view('header_adv');
		$data['beds']=$this->Advocate_model->getBedList();
		$this->load->view('bedlist_dr',$data);
		$this->load->view('footer');
	}

// Prescription module in doctor begins
	public function addprescription_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('addprescription_dr');
		$this->load->view('footer');
	}
	
	
	public function prescriptionlist_dr()
	{
		$this->load->view('header_adv');
		$data['prescriptions']=$this->Advocate_model->getPrescriptionList();
		$this->load->view('prescriptionlist_dr',$data);
		$this->load->view('footer');
	}
	
	public function update_prescription_dr($id)
	{
		$this->load->view('header_adv');
		$data['prescription']=$this->Advocate_model->getByIdPrescriptionList($id);
		$this->load->view('update_prescription_dr',$data);
		$this->load->view('footer');
	}
	public function operation_dr()
	{
		$this->load->view('header_adv');
		$data['reports']=$this->Advocate_model->getReportList();
		$this->load->view('operation_dr',$data);
		$this->load->view('footer');
	}
	public function update_report_dr($id)
	{
		$this->load->view('header_adv');
		$data['report']=$this->Advocate_model->getByIdReportList($id);
		$this->load->view('update_report_dr',$data);
		$this->load->view('footer');
	}
	
	
	
	//End of prescription module in doctor

	// Bed  module in doctor begins
	public function addbed_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('addbed_dr');
		$this->load->view('footer');
	}
	

	//End of bed module in doctor

	// Blood  module in doctor begins
	public function bloodbank_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('bloodbank_dr');
		$this->load->view('footer');
	}
	public function donorlist_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('donorlist_dr');
		$this->load->view('footer');
	}
	//End of blood module in doctor


	// report  module in doctor begins
	
	
	public function birth_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('birth_dr');
		$this->load->view('footer');
	}
	public function death_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('death_dr');
		$this->load->view('footer');
	}
	public function other_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('other_dr');
		$this->load->view('footer');
	}
	public function addreport_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('addreport_dr');
		$this->load->view('footer');
	}
	//End of report module in doctor


	
	public function profile_adv()
	{
		$this->load->view('header_adv');
		$data['advocates']=$this->Admin_model->getAdvocateList();
		$this->load->view('profile_adv',$data);
		$this->load->view('footer');
	}

	public function viewprofile_dr()
	{
		$this->load->view('header_adv');
		$this->load->view('viewprofile_dr');
		$this->load->view('footer');
	}

	


	public function changepwd_adv($id)
	{
		$this->load->view('header_adv');
		$data['advocate']=$this->Admin_model->getByIdAdvocateList($id);
		$this->load->view('changepwd_adv',$data);
		$this->load->view('footer');
	}
	
	public function Login_adv()
	{
		
		$this->load->view('Login_adv');
	
	}
	
	
	
  public function login()
 {
  $this->load->view('login_adv');
 }
 public function verifylogin(){
 
  $this->form_validation->set_rules('AdminAdvocateEmail','AdminAdvocateEmail','required');
  $this->form_validation->set_rules('AdminAdvocatePassword','AdminAdvocatePassword','required');
  if($this->form_validation->run())
  {
  
    
    $AdminAdvocateEmail=$this->input->post('AdminAdvocateEmail');
    $AdminAdvocatePassword=$this->input->post('AdminAdvocatePassword');
    $this->load->model('Advocate_model');
    $validate=$this->Advocate_model->login($AdminAdvocateEmail,$AdminAdvocatePassword);
    // print_r($validate);exit;
    if($validate)
    {
      $_SESSION['AdminAdvocateEmail']=$validate->AdminAdvocateEmail;
      redirect('/advocate/advocate');
    }
    else
    {
      $this->session->set_flashdata('error','Invalid Login Details.please try again.');
      redirect('advocate/login_adv');
    }
  }else
  {
    $this->load->view('login_adv');
  }

 }
 public function logout(){
  $this->session->sess_destroy();
  redirect('/advocate/Login_adv','refresh');
}
}?>
 
	

	

	
	
