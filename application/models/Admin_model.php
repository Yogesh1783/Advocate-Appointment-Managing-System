<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {



    //Transaction for Advocate
    public function  insertPayment_adv()
 {
  if($this->input->post('AdvocateAccountHolderName'))
    {
        
               
                $data=array(
               'AdvocateAccountHolderName'=>$this->input->post('AdvocateAccountHolderName'),
            

               'AdvocateAccountNumber'=>$this->input->post('AdvocateAccountNumber'),
               'AdvocateTransferedAmount'=>$this->input->post('AdvocateTransferedAmount'),
               'AdvocateUTRID'=>$this->input->post('AdvocateUTRID'),
               
             
              
                );
                $this->db->insert('transcation_adv ',$data);

                 
                 
                redirect('home/Thank');

              
         }
     }
     public function  updatePayment_adv()
 {
  if($this->input->post('AdvocateAccountHolderName'))
    {
        
               
                $data=array(
               'AdvocateAccountHolderName'=>$this->input->post('AdvocateAccountHolderName'),
            

               'AdvocateAccountNumber'=>$this->input->post('AdvocateAccountNumber'),
               'AdvocateTransferedAmount'=>$this->input->post('AdvocateTransferedAmount'),
               'AdvocateUTRID'=>$this->input->post('AdvocateUTRID'),
               
             
              
                );
                $this->db->where('TransactionId ',$id);
                $this->db->update('transcation_adv ',$data);

                 
                 
                redirect('home/Thank');

              
         }
     }
     public function deletePayment_adv($id)
 {


$this->db->where('TransactionId ',$id);
$this->db->delete('transcation_adv ');
redirect('Admin/advocatelist_ad ');
 }
     public function getPaymentList(){
     $data=$this->db->get('transcation_adv ')->result();
   return $data;
        
    }
  public function getByIdPaymentList($id){
   $data=$this->db->where('TransactionId',$id)->get('transcation_adv ')->row();
   return $data;
 }

 //Transaction for Client
 public function  insertTransaction()
 {
  if($this->input->post('ClientAccountHolderName'))
    {
        
               
                $data=array(
               'ClientAccountHolderName'=>$this->input->post('ClientAccountHolderName'),
            

               'ClientAccountNumber'=>$this->input->post('ClientAccountNumber'),
               'ClientTransferedAmount'=>$this->input->post('ClientTransferedAmount'),
               'ClientUTRID'=>$this->input->post('ClientUTRID'),
               
             
              
                );
                $this->db->insert('transcation_ci ',$data);

                 
                 
                redirect('home/Thank_ci');

              
         }
     }
     public function  updateTransaction($id)
 {
  if($this->input->post('ClientAccountHolderName'))
    {
        
               
                $data=array(
               'ClientAccountHolderName'=>$this->input->post('ClientAccountHolderName'),
            

               'ClientAccountNumber'=>$this->input->post('ClientAccountNumber'),
               'ClientTransferedAmount'=>$this->input->post('ClientTransferedAmount'),
               'ClientUTRID'=>$this->input->post('ClientUTRID'),
               
             
              
                );
                $this->db->insert('transcation_ci ',$data);

                 
                 
                redirect('home/Thank_ci');

              
         }
     }
     public function deleteTransaction($id)
 {


$this->db->where('ClientTransactionId ',$id);
$this->db->delete('transaction_ci ');
redirect('Admin/advocatelist_ad ');
 }
      public function getTransactionList(){
     $data=$this->db->get('transaction_ci ')->result();
   return $data;
        
    }
  public function getByIdTransactionList($id){
   $data=$this->db->where('ClientTransactionId',$id)->get('transaction_ci ')->row();
   return $data;
 }


 public function  insertAdvocate()
 {
 	if($this->input->post('AdminAdvocateName'))
    {
        
               
                $data=array(
               'AdminAdvocateName '=>$this->input->post('AdminAdvocateName'),
            

               'AdminAdvocateEmail '=>$this->input->post('AdminAdvocateEmail'),
               'AdminAdvocatePassword '=>$this->input->post('AdminAdvocatePassword'),
               'AdminAdvocateAddress '=>$this->input->post('AdminAdvocateAddress'),
               'AdminAdvocateMobile '=>$this->input->post('AdminAdvocateMobile'),
               'AdminAdvocateDepartment '=>$this->input->post('AdminAdvocateDepartment'),
               'AdminAdvocateCertificate '=>$this->input->post('AdminAdvocateCertificate'),
               'AdvocateImage'=>$this->input->post('AdvocateImage'),
                      
               
                );
                $this->db->insert('advocate_ad ',$data);

                 
                 
                redirect('Admin/advocatelist_ad ');

             	
         }
     }
 
           
 public function updateAdvocate($id)
 {
    if($this->input->post('AdminAdvocateName')){

    $data=array(
   'AdminAdvocateName '=>$this->input->post('AdminAdvocateName'),
   'UserType'=>$this->input->post('UserType'),
   'AdminAdvocateEmail '=>$this->input->post('AdminAdvocateEmail'),
   'AdminAdvocateAdminPassword '=>$this->input->post('AdminAdvocateAdminPassword'),
   'AdminAdvocateAddress '=>$this->input->post('AdminAdvocateAddress'),
   'AdminAdvocateMobile '=>$this->input->post('AdminAdvocateMobile'),
   'AdminAdvocateDepartment '=>$this->input->post('AdminAdvocateDepartment'),
   'AdminAdvocateCertificate '=>$this->input->post('AdminAdvocateCertificate'),
                              


    );
    $this->db->where('AdminAdvocateId ',$id);
    $this->db->update('advocate_ad ',$data);
    redirect('Admin/advocatelist_ad ');

    }
 }
 public function deleteAdvocate($id)
 {


$this->db->where('AdminAdvocateId ',$id);
$this->db->delete('advocate_ad ');
redirect('Admin/advocatelist_ad ');
 }

 public function getAdvocateList(){
     $data=$this->db->get('advocate_ad ')->result();
   return $data;
        
    }
  public function getByIdAdvocateList($id){
   $data=$this->db->where('AdminAdvocateId',$id)->get('advocate_ad ')->row();
   return $data;
 }
	public function insertClient()
	{
 	if($this->input->post('CaseType')){

    $data=array(
    'CaseType' => $this->input->post('CaseType'),
   
    'ClientName' => $this->input->post('ClientName'),  
    'ClientEmail' => $this->input->post('ClientEmail'),  
    'ClientMobile'   => $this->input->post('ClientMobile'),  
    'ClientAge' => $this->input->post('ClientAge'),
    'ClientBirth' => $this->input->post('ClientBirth'),
    'ClientGender' => $this->input->post('ClientGender'),
    'ClientPassword' => $this->input->post('ClientPassword'),
    'ClientAddress' => $this->input->post('ClientAddress'),  
    
    

    );
    
    $this->db->insert('addclient_ad',$data);
    
  
    redirect('Admin/Clientlist_ad');

 	}
 }
 public function updateClient($id)
    {
    if($this->input->post('CaseType')){

    $data=array(
    'CaseType' => $this->input->post('CaseType'),
   
    'ClientName' => $this->input->post('ClientName'),  
    'ClientEmail' => $this->input->post('ClientEmail'),  
    'ClientMobile'   => $this->input->post('ClientMobile'),  
    'ClientAge' => $this->input->post('ClientAge'),
    'ClientBirth' => $this->input->post('ClientBirth'),
    'ClientGender' => $this->input->post('ClientGender'),
    'ClientPassword' => $this->input->post('ClientPassword'),
    'ClientAddress' => $this->input->post('ClientAddress')
    
    

    );
     $this->db->where('ClientId',$id);
    $this->db->update('addclient_ad',$data);
    redirect('Admin/clientlist_ad');

    }
 }
 public function deleteClient($id)
 {


$this->db->where('ClientId',$id);
$this->db->delete('addclient_ad');
redirect('Admin/clientlist_ad');
 }





 public function getClientList(){
    $data=$this->db->get('addclient_ad ')->result();
   return $data;
 }
  public function getByIdClientList($id){
   $data=$this->db->where('ClientId',$id)->get('addclient_ad')->row();
   return $data;
 }
 
 
  
 
 
  
 public function insertAppointment()
    {
    if($this->input->post('AppointmentClientName')){
 $data=array(
                        'AppointmentClientAdvocateEmail' => $this->input->post('AppointmentClientAdvocateEmail'),
                        'AppointmentClientName' => $this->input->post('AppointmentClientName'),
                        'AppointmentClientDate' => $this->input->post('AppointmentClientDate')
                        
                        );  
        //insert data into database table.  
        $this->db->insert('appointment_ci',$data);  
  
        redirect("admin/appointmentlist_ad");  

    }
 }
 public function updateAppointment($id)
    {
    if($this->input->post('AppointmentPatientName')){
 $data=array(
                                                'AppointmentClientAdvocateEmail' => $this->input->post('AppointmentClientAdvocateEmail'),
                        'AppointmentClientName' => $this->input->post('AppointmentClientName'),
                        'AppointmentClientDate' => $this->input->post('AppointmentClientDate')
                        
                        );  
        //insert data into database table. 
        $this->db->where('AppointmentClientId',$id); 
        $this->db->update('appointment_ci',$data);  
  
        redirect("admin/appointmentlist_ad");  

    }
 }
 public function getAppointmentList(){
   $data=$this->db->get('appointment_ci')->result();
   return $data;
 }
  public function getByIdAppointmentList($id){
   $data=$this->db->where('AppointmentId',$id)->get('appointment_ci')->row();
   return $data;
 }

 public function insertMessage()
    {
    if($this->input->post('mailTo')){
 $data=array(
                        'mailTo' => $this->input->post('mailTo'),
                        'mailsubject' => $this->input->post('mailsubject'),
                        'body' => $this->input->post('body')
                        
                        );  
        //insert data into database table.  
        $this->db->insert('msg_adv',$data);  
  
        redirect("admin/messagelist_adv");  

    }
 }
 public function getMessageList(){
   $data=$this->db->get('msg_adv')->result();
   return $data;
 }
  public function getByIdMessageList($id){
   $data=$this->db->where('MessageId',$id)->get('msg_adv')->row();
   return $data;
 }


 public function insertProfile()
    {
    if($this->input->post('AdminEmail')){
           $data = array(  
                        'AdminEmail' => $this->input->post('AdminEmail'),
                        'AdminPassword' => $this->input->post('AdminPassword') 
                       
                        );  
      
        $this->db->insert('admin_ad',$data);  
  
        redirect("Admin/profile_save_ad");  

    }
 }
 public function updateProfile($id)
    {
    if($this->input->post('AdminEmail')){
          $data = array(  
                        'AdminEmail' => $this->input->post('AdminEmail'),
                        'AdminPassword' => $this->input->post('AdminPassword') 
                       
                        );  
      
        $this->db->where('id',$id); 
        $this->db->update('admin_ad',$data);  
  
        redirect("Admin/profile_save_ad"); 

    }
 }
 public function deleteProfile($id)
 {
$this->db->where('id',$id);
$this->db->delete('admin_ad');
redirect('Admin/profile_save_ad');
 }
 public function getAdminList(){
   $data=$this->db->get('admin_ad')->result();
   return $data;
 }
  public function getByIdAdminList($id){
   $data=$this->db->where('id',$id)->get('admin_ad')->row();
   return $data;
 }

public function deleteAppointment($id)
 {


$this->db->where('AppointmentClientId',$id);
$this->db->delete('appointment_ci');
redirect('Admin/appointmentlist_ad');
 }

public function login($AdminEmail,$AdminPassword){
  $data=array(

'AdminEmail'=>$AdminEmail,
'AdminPassword'=>$AdminPassword);
  $query=$this->db->where($data);
  $login=$this->db->get('admin_ad');
  if($login!=NULL){
    return $login->row();
  }
}
public function logout(){
  $this->session->sess_destroy();
  redirect('index.php/Admin/Login_ad','refresh');
}

 
}?>
