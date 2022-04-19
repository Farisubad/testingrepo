<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mhs extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('dataaja');
    }

    public function index()

    {
		$data['mahasiswa'] = $this->dataaja->ambildata()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');	
		$this->load->view('mahasiswa',$data);	
		$this->load->view('templates/footer');
    }

    public function hapus($id){
        $where = array ('id'=> $id);
        $this->dataaja->hapus_data($where,'tbl_mhs');
        redirect('mhs/index');
    }


        public function fungsitambah(){
        
            $nama = $this->input->post('nama');
            $npm = $this ->input ->post ('npm');
            $tgl_lahir = $this ->input ->post('tgl_lahir');
            $dosen = $this->input->post('dosen');
            $jurusan = $this ->input ->post ('jurusan');

        $data = array(
            
            'nama'=>$nama,
            'npm'=>$npm,
            'tgl_lahir'=>$tgl_lahir,
            'dosen'=>$dosen,
            'jurusan'=>$jurusan
        );
        $this->dataaja->input($data,'tbl_mhs');
        redirect('mhs');
    }

    public function ubad($id){
        $where = array('id'=>$id);
        $data['mahasiswa']=$this->dataaja->edit_data($where,'tbl_mhs')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ubad',$data);
        $this->load->view('templates/footer');
    }
        public function update(){
            $id =$this ->input->post('id');
            $nama = $this->input->post('nama');
            $npm = $this ->input ->post ('npm');
            $tgl_lahir = $this ->input ->post('tgl_lahir');
            $dosen = $this->input->post('dosen');
            $jurusan = $this ->input ->post ('jurusan');

        $data = array(
            
            'nama'=>$nama,
            'npm'=>$npm,
            'tgl_lahir'=>$tgl_lahir,
            'dosen'=>$dosen,
            'jurusan'=>$jurusan

        );
        $where = array(
            'id'=>$id
        );
        $this->dataaja->update_data($where,$data,'tbl_mhs');
        redirect('mhs/index');
    }
    public function exportpdf(){

        $this->load->library('dompdf_gen');
        $data['mahasiswa']=$this->dataaja->ambildata('tbl_mhs')->result();
        $this->dompdf_gen->generate('export', $data, 'laporan-mahasiswa', 'A4', 'landscape');
        }
	

}