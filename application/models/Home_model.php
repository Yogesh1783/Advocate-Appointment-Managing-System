<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
 public function  insertAdvocate()
 {
  if($this->input->post('Reg_AdvocateName'))
    {
        
               
                $data=array(
               'Reg_AdvocateName'=>$this->input->post('Reg_AdvocateName'),
               'Reg_AdvocateEmail'=>$this->input->post('Reg_AdvocateEmail'),
               'Reg_AdvocateAddress'=>$this->input->post('Reg_AdvocateAddress'),
               'Reg_AdvocateMobileNo'=>$this->input->post('Reg_AdvocateMobileNo'),
               'Reg_AdvocateDepartment'=>$this->input->post('Reg_AdvocateDepartment'),
               'Reg_AdvocateCertificate'=>$this->input->post('Reg_AdvocateCertificate'),
                
            
             
              
                );
                $this->db->insert('reg_adv ',$data);

                 
                 
                redirect('/home/qr');

              
         }
     }
     public function getVerifyAdvocateList(){
        $data=$this->db->get('reg_adv')->result();
   return $data;
    }
    public function getByIdVerifyAdvocateList($id){
   $data=$this->db->where('Reg_AdvocateId',$id)->get('reg_adv')->row();
   return $data;
 }

  
     public function  insertClient()
 {
  if($this->input->post('Reg_ClientName'))
    {
        
               
                $data=array(
               'Reg_ClientName'=>$this->input->post('Reg_ClientName'),
            

               'Reg_ClientEmail'=>$this->input->post('Reg_ClientEmail'),
               'Reg_ClientMobileno'=>$this->input->post('Reg_ClientMobileno'),
               'Reg_ClientAddress'=>$this->input->post('Reg_ClientAddress'),
               'Reg_ClientCaseType'=>$this->input->post('Reg_ClientCaseType'),
               'Reg_ClientAge'=>$this->input->post('Reg_ClientAge'),
               'Reg_ClientGender'=>$this->input->post('Reg_ClientGender'),
               
             
              
                );
                $this->db->insert('reg_ci ',$data);

                 
                 
                redirect('home/qr_ci');

              
         }
     }
          public function getVerifyClientList(){
        $data=$this->db->get('reg_ci')->result();
   return $data;
    }
    public function getByIdVerifyClientList($id){
   $data=$this->db->where('Reg_ClientId',$id)->get('reg_ci')->row();
   return $data;
 }
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

      public function  insertTransaction()
 {
  if($this->input->post('ClientAccountHolderName'))
    {
        
               
                $data=array(
               'ClientAccountHolderName'=>$this->input->post('ClientAccountHolderName'),
               'ClientAccountNumber'=>$this->input->post('ClientAccountNumber'),
               'ClientTransferedAmount'=>$this->input->post('ClientTransferedAmount'),
               'ClientUTRID'=>$this->input->post('ClientUTRID')
              
                );
                $this->db->insert('transaction_ci',$data);
                redirect('home/Thank_ci');

              
         }
     }
      public function getTransactionCiList(){
        $data=$this->db->get('transcation_ci')->result();
   return $data;
    }
    public function getByIdTransactionCiList($id){
   $data=$this->db->where('ClientTransactionId',$id)->get('transcation_ci')->row();
   return $data;
 }
    

}
?>