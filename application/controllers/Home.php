 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

        public function findlawyer()
    {
        $this->load->view('header');
        $data['advocates']=$this->Admin_model->getAdvocateList();
        $this->load->view('findlawyer',$data);
        $this->load->view('footer');
    }



    public function home()
    {
       // $this->load->view('header');
        $this->load->view('home');
       // $this->load->view('footer');
        
    }

    public function login()
    {
       // $this->load->view('header');
        $this->load->view('login_ad');
       // $this->load->view('footer');
        
    }
    public function Payment()
    {
        $this->load->view('header');
        $this->load->view('Payment');
        $this->load->view('footer');
        
    }
    public function Payment_ci()
    {
        $this->load->view('header');
        $this->load->view('Payment_ci');
        $this->load->view('footer');
        
    }
    public function Thank()
    {
        $this->load->view('header');
        $this->load->view('Thank');
        $this->load->view('footer');
        
    }
    public function about()
    {
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
        
    }
    public function Thank_ci()
    {
        $this->load->view('header');
        $this->load->view('Thank_ci');
        $this->load->view('footer');
        
    }

    


        public function insertAdvocate()
    {
        

        $config=[
            'upload_path'=>'./public/upload/Reg_adv/',
            'allowed_types'=>'jpg|png|gif',
            'max_size'=>'2048000'
        ];

$this->load->library('upload', $config);
if($this->upload->do_upload('Reg_AdvocateImage'))
          {
                    $data=$this->upload->data();
                    echo "<pre>";print_r($this->upload->data());
                }else{
                    echo "Error";
                }



    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
    $this->form_validation->set_rules('Reg_AdvocateEmail','Reg_AdvocateEmail','required|is_unique[reg_adv.Reg_AdvocateEmail]');
    if($this->form_validation->run()==TRUE){
        $this->Home_model->insertAdvocate();
    }
    else
    {
        redirect('admin/addadvocate_ad');
    }
    
    }

    public function insertClient()
    {
        $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('Reg_ClientImage'))
                {
                    echo "<pre>";print_r($this->upload->data());
                }else
                {
                    echo "";
                }
        $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
    $this->form_validation->set_rules('Reg_ClientEmail','Reg_ClientEmail','required|is_unique[reg_ci.Reg_ClientEmail]');
    if($this->form_validation->run()==TRUE)
    {
        $this->Home_model->insertClient();
    }
    else
    {
        redirect('Home/Register_ci');
    }
    }

    public function insertPayment_adv()
    {
        $this->Home_model->insertPayment_adv();
    }
    
    
    public function insertTransacton()
    {
        $this->Home_model->insertTransaction();
    }
    
    
    
        
    
    
    
    public function qr()
    {
        $this->load->view('qr');
        
        
    }
    public function qr_ci()
    {
        $this->load->view('qr_ci');
        
        
    }


    public function register_adv()
    {
         $this->load->view('header');
        $this->load->view('Register_adv');
        
        
    }
    public function register_ci()
    {
         $this->load->view('header');
        $this->load->view('Register_ci');
        
        
    }



}