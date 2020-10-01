<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function login($username,$password)
    {
     $p = $this->db->get_where("customer",array("username"=>$username,"password"=>md5($password)));
        return $p;
    }
    public function save()
    {
             $username = $this->input->post("username");
             $password = $this->input->post("password");
             $nama = $this->input->post("nama");
             $alamat = $this->input->post("alamat");
             $nohp = $this->input->post("nohp");
             $email = $this->input->post("email");
             $level = "user";

             $userdaftar=array(
                'username'=>$username,
                'password'=>md5($password),
                'nama_customer'=>$nama,
                'alamat'=>$alamat,
                'nohp'=>$nohp,
                'email'=>$email,
                'level'=>$level
                 );

        return $this->db->insert("customer", $userdaftar);
    }
    public function hapusTransaksi($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
    }
    public function ubahData(){
             $namalengkap = $this->input->post("namalengkap");
             $alamat = $this->input->post("alamat");
             $nohp = $this->input->post("nohp");
             $email = $this->input->post("email");
          
             $userdaftar=array(
                'nama_customer'=>$namalengkap,
                'alamat'=>$alamat,
                'nohp'=>$nohp,
                'email'=>$email
                 );
             
        $username=$this->session->userdata('login', 11);
        $this->db->where("username",$username);
        return $this->db->update("customer", $userdaftar);   
    }   

    public function list_transaksi($session)
    {
        // select * from transaksi where username = session
        return $this->db->get_where("transaksi",array("username"=>$this->session->userdata('login', 11)));
    }
    public function getDataByUsername()
    {
        // select * from customer where username = session
        // $this->db->select(array(""))
        return $this->db->get_where("customer",array("username"=>$this->session->userdata('login', 11)));
        
    }
    public function getLevel(){
        $query = $this->db->get_where("customer",array("username"=>$this->session->userdata('login', 11)));
        return $query->row();
    }
    public function pesanLaundry()
    {
        $username = $this->session->userdata('login', 11);
        $pewangi = $this->input->post("pewangi");
        $tanggal_pesan = date("d-m-Y,");
        $jam_pesan = date("h:i");
        $userpesan=array(
                'username'=>$username,
                'pewangi'=>$pewangi,
                'tanggal_pesan'=>$tanggal_pesan,
                'jam_pesan'=>$jam_pesan,
                'berat_cucian'=>'-',
                'harga'=>'-',
                'status_cucian'=>'0'
                 );

        return $this->db->insert("transaksi", $userpesan);
        
    }
    public function list_user($username)
    {
        // select * from customer where username = session
        return $this->db->get_where("customer",array("username"=>$username));
    }
    public function ubahPassword()
    {
        $passwordbaru = $this->input->post("passwordbaru");
        $ubahpass=array('password'=>md5($passwordbaru));
        $username=$this->session->userdata('login', 11);
        $this->db->where("username",$username);
        return $this->db->update("customer", $ubahpass); 
    }
}
