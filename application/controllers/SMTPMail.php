<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SMTPMail extends CI_Controller {

		
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
			
			$mail = ($this->email->send()) ? "Sent" : "Failed" ;
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
	}

?>