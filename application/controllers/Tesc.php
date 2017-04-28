<?php
/*
  created 20/4/2017
  updates:
   - nambah library soal.php
*/

  class Tesc extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->model('mtes');
    }
    public function index(){
      //include ('cek.php'); //cek apakah sudah login
      $data['page']='Coba Tes';
      if($this->session->userdata('user')&&$this->session->userdata('pass')){
        redirect(base_url('tes'));
      }else{
        $this->load->view('core/core',$data);
        $this->load->view('vtesc');
        $this->load->view('core/footer');
      }
    }
    public function mulai($nosoal){
      //load library Soal.php @ libraries/Soal.php
      if(!$this->session->userdata('user')&&!$this->session->userdata('pass')){
        $data['page']= 'Mulai';
        //$data['datasoal'] = $this->mtes->tes_coba()->row();
        $data['datasoal'] = $this->mtes->tes_coba($nosoal)->result();

        $this->load->view('core/core',$data);
        $this->load->view('vtesc',$data);
        $this->load->view('core/footer');
      }else{
        redirect(base_url('tes'));
      }
    }
    public function cek(){

    }
  }


 ?>
