<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function login_admin($username,$password)
    {
     $p = $this->db->get_where("admin",array("user_admin"=>$username,"password"=>md5($password)));
        return $p;
    }
       
    public function list_transaksi()
    {
        // select * from transaksi where username = session
        return $this->db->get("transaksi");
    }
    public function list_user()
    {
        // select * from customer where username = session
        return $this->db->get_where("customer");
    }
    public function list_admin()
    {
        // select * from customer where username = session
        return $this->db->get_where("admin");
    }
    public function updateTransaksi(){
            $id = $this->input->post("idtransaksi");
            $berat = $this->input->post("berat");
            $harga = ($berat * 4000);
            $statuscucian = $this->input->post("statuscucian");
                      
            $updatetransaksi=array(
                'berat_cucian'=>$berat,
                'harga'=>'Rp '.$harga,
                'status_cucian'=>$statuscucian
                 );
        $this->db->where("id_transaksi",$id);
        return $this->db->update("transaksi", $updatetransaksi);
    }
    public function getTransaksi($id){
        $query = $this->db->select('transaksi.*, customer.*')
              ->from('transaksi')
              ->join('customer', 'transaksi.username = customer.username', 'inner')
              ->where('transaksi.id_transaksi', $id)
              ->get();
        return $query->row();
    }
    public function getLevel(){
        $query = $this->db->get_where("admin",array("user_admin"=>$this->session->userdata('login', 11)));
        return $query->row();
    }
    public function tambahAdmin($data){
        //      // $username = $this->input->post("username");
        //      // $password = $this->input->post("password");
        //      // $level = "admin";

        //      // $admintambah=array(
        //      //    'user_admin'=>$username,
        //      //    'password'=>md5($password),
        //      //    'level'=>$level
        //      //     );

        // return $this->db->insert("admin", $admintambah);

        $query = $this->db->insert('admin',$data);
        if($query==true){
            return true;
        }else{
            return false;
        }


    }

    public function hapusAdmin($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('admin');
    }

    public function view_row($id){
         $query = $this->db->select('transaksi.*, customer.*')
              ->from('transaksi')
              ->join('customer', 'transaksi.username = customer.username', 'inner')
              ->where('transaksi.id_transaksi', $id)
              ->get();
        return $query->row();

        // return $this->db->get('customer')->result();
    }
    
}
