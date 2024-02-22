 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {

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
               
                         
              
                );
                $this->db->insert('advocate_ad ',$data);

                 
                 
                redirect('Client/advocatelist_ci ');

              
         }
     }
 
           
 public function updateAdvocate($id)
 {
    if($this->input->post('AdminAdvocateName')){

    $data=array(
   'AdminAdvocateName '=>$this->input->post('AdminAdvocateName'),
   'UserType'=>$this->input->post('UserType'),
   'AdminAdvocateEmail '=>$this->input->post('AdminAdvocateEmail'),
   'AdminAdvocatePassword '=>$this->input->post('AdminAdvocatePassword'),
   'AdminAdvocateAddress '=>$this->input->post('AdminAdvocateAddress'),
   'AdminAdvocateMobile '=>$this->input->post('AdminAdvocateMobile'),
   'AdminAdvocateDepartment '=>$this->input->post('AdminAdvocateDepartment'),
   'AdminAdvocateCertificate '=>$this->input->post('AdminAdvocateCertificate')


    );
    $this->db->where('AdminAdvocateId ',$id);
    $this->db->update('advocate_ad ',$data);
    redirect('Client/advocatelist_ci ');

    }
 }
 public function deleteAdvocate($id)
 {


$this->db->where('AdminAdvocateId ',$id);
$this->db->delete('advocate_ad ');
redirect('Client/advocatelist_ci ');
 }

 public function getAdvocateList(){
         $data=$this->db->get('advocate_ad')->result();
   return $data;
    }

  public function getByIdAdvocateList($id){
   $data=$this->db->where('AdminAdvocateId ',$id)->get('advocate_ad ')->row();
   return $data;
 }
	public function insertAppointment()
    {
    if($this->input->post('AppointmentClientEmail')){
 $data=array(
    
                        'AppointmentClientEmail' => $this->input->post('AppointmentClientEmail'),
                        'AppointmentClientAdvocateEmail' => $this->input->post('AppointmentClientAdvocateEmail'),
                        'AppointmentClientDate' => $this->input->post('AppointmentClientDate'),
                        'AddedBy'=>$this->session->ClientEmail,
                         

                        );  
        //insert data into database table.  
        $this->db->insert('appointment_ci',$data);  
  
        redirect("Client/appointmentlist_ci");  

    }
 }
  public function updateAppointment($id)
    {
    if($this->input->post('AppointmentClientName')){
 $data=array(
    
                        'AppointmentClientName' => $this->input->post('AppointmentClientName'),
                        'AppointmentClientAdvocateName' => $this->input->post('AppointmentClientAdvocateName'),
                        'AppointmentClientDate' => $this->input->post('AppointmentClientDate')
                         
                        );  
        //insert data into database table.  
        $this->db->where('AppointmentClientId',$id);

        $this->db->update('appointment_ci',$data);  
  
        redirect("Client/appointmentlist_ci");  

    }
 }
 
 public function deleteAppointment($id)
 {


$this->db->where('AppointmentClientId',$id);
$this->db->delete('appointment_ci');
redirect('Client/appointmentlist_ci');
 }


 public function getAppointmentList(){
  
    $data=$this->db->where('AddedBy',$this->session->ClientEmail)->get('appointment_ci')->result();
   return $data;
 
 }
  public function getByIdAppointmentList($id){
   $data=$this->db->where('AppointmentClientId',$id)->get('appointment_ci')->row();
   return $data;
 }
  

public function login($ClientEmail,$ClientPassword){
  $data=array(

'ClientEmail'=>$ClientEmail,
'ClientPassword'=>$ClientPassword);
  $query=$this->db->where($data);
  $login=$this->db->get('addclient_ad');
  if($login!=NULL){
    return $login->row();
  }
}
public function logout(){
  $this->session->sess_destroy();
  redirect('index.php/Client/Login_ci','refresh');
}

}?>