<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('beranda');
	}

	public function registrasi()
    {        

        $this->load->model("admin_model");
        $data["judul"] = "CRUD + Verifikasi Email";
        if(isset($_POST["reg"]))
        {
        $username = $this->input->post("username");
        $user= $this->user_model->list_user($username);
        if($user->num_rows() < 1){
        $cut = $this->user_model->save();
            if($cut){
               $data["alert_reg"] = "<p>Pendaftaran Berhasil <b><a href='".site_url("do_login")."'>Klik disini Untuk Login</a></b></p>";
            }
            else{
                 $data["alert_reg"] = "<p><b>Maaf Anda Gagal Registrasi</b></p>";
            }

        }else{
            $data["alert_reg"] = "<p><b>*Maaf Username telah digunakan, silahkan pilih username lain</b></p>";
        }
            }
            $this->load->view("registrasi",$data);
    }

    public function do_login()
    {
        $this->load->model("user_model");
        $data["judul"] = "CRUD + Verifikasi Email";
        if(isset($_POST["login"])){
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $d = $this->user_model->login($username,$password);
            if($d->num_rows() > 0)
            {
                $this->session->set_userdata('login', $username);
                redirect ('hal_user');
                     
            }
            else{
                $data["alert_reg"] = "<p><b>*Username atau password salah</b></p>";
            }
        }        
         $this->load->view("login",$data);
    }

    public function user_home()
    {
       if($this->session->userdata("login") != "")
        {
        $level= $this->user_model->getLevel();
        $levelisasi= $level->level;
        if($levelisasi == "user"){
            if(isset($_POST["pesan"]))
            {
                $savepesan = $this->user_model->pesanLaundry();
                if($savepesan){
                    redirect('hal_user');
                }else{
                    echo "Pesanan Gagal Diproses Silahkan Coba Lagi";
                }
                
            }
            else 
            {
                $this->load->model("user_model");
                $session = $this->session->login;
                $data["customer"] = $this->user_model->list_transaksi($session);
                $this->load->view("user_home",$data);
            }
        }
        else{
            redirect ('do_login');
        }
        }
        else
        {
            redirect ('do_login');
        }
    }
    
    public function hapustransaksi($id)
        {
            $b = $this->user_model->hapusTransaksi($id);
            redirect('hal_user');
        }
    
    public function logout()
    {
        if($this->session->login != null)
        {
            $this->session->sess_destroy();
            redirect('do_login');
        }else{
            show_404();
        }
    }

    public function editdatadiri()
    {
        if($this->session->userdata("login") != "")
        {   
         $data["judul"] = "CRUD + Verifikasi Email";
        $level= $this->user_model->getLevel();
        $levelisasi= $level->level;
        if($levelisasi == "user"){         
            if(isset($_POST["ubahdata"])){
             $a = $this->user_model->ubahData();
            if($a)
            {
                redirect('editdatadiri');
            }
            else{
                 'error';
            }   
            }elseif(isset($_POST["ubahpass"])){
                $e = $this->user_model->ubahPassword();
                if($e){
                    $data["alert_reg"] = "<p><b>Selamat password berhasil diubah</b></p>";
                }
            }
            else{
                //variabel detail yang akan dipanggil di view
                $detail = $this->user_model->getDataByUsername();
                if($detail->num_rows() > 0)
                {
                    $data["detail"] = $detail->result()[0];
                    $this->load->view("edit_data",$data);
                }
                else{
                    show_404();           
                }
            }
        }
        else {
            redirect('do_login');
        }
        }else
        {
            redirect ('do_login');
        }
    }

    public function ubahpassword(){
        // $this->load->model("user_model");
        $data["judul"] = "CRUD + Verifikasi Email";
        if($this->session->userdata("login") != "")
        {
        $level= $this->user_model->getLevel();
        $levelisasi= $level->level;
        if($levelisasi == "user"){
            if(isset($_POST["ubahpass"]))
            {
                $e = $this->user_model->ubahPassword();
                if($e){
                    $data["alert_reg"] = "<p><b>Selamat password berhasil diubah</b></p>";
                }
            }
        $this->load->view('ubah_pass',$data);

        }
        else{
            redirect ('do_login');
        }

    }
    }





//admin
   public function admin_home()
    {
       if($this->session->userdata("login") != "")
        {
        $this->load->model("admin_model");
        $level= $this->admin_model->getLevel();
        $levelisasi= $level->level;
        if($levelisasi == "admin"){
        if(isset($_POST["ubahdata"])){
             $z = $this->admin_model->updateTransaksi();
            if($z)
            {
                redirect ('hal_admin');
            }
            else{
                 'error';
            }
            }
            else{
                $session = $this->session->login;
                $data["admin"] = $this->admin_model->list_transaksi();
                $this->load->view("admin_home",$data);
        }
        }else {
            redirect ('do_login_admin');
        }
        }else
        {
            redirect ('do_login_admin');
        }
    }
    public function daftaruser()
    {
       if($this->session->userdata("login") != "")
        {
            
            $this->load->model("admin_model");
            $level= $this->admin_model->getLevel();
            $levelisasi= $level->level;
            if($levelisasi == "admin"){
                $session = $this->session->login;
                $data["listuser"] = $this->admin_model->list_user();
                $this->load->view("daftar_user",$data);
        
        }else{
            redirect('do_login_admin');
        }
        }
        else
        {
            redirect ('do_login_admin');
        }
    }

    public function detail($id){
      if($this->session->userdata("login") != ""){
        $this->load->model("admin_model");
        $level= $this->admin_model->getLevel();
        $levelisasi= $level->level;
        if($levelisasi == "admin"){       
        $data['transaksilengkap'] = $this->admin_model->getTransaksi($id);
        $this->load->view('detail_transaksi', $data);       
    }else{
        redirect('do_login_admin');
    }
    }else {
        redirect ('do_login_admin');
    }}

    public function do_login_admin(){
        
        $this->load->model("admin_model");
        $data["judul"] = "CRUD + Verifikasi Email";
        if(isset($_POST["login"])){
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $d = $this->admin_model->login_admin($username,$password);
            if($d->num_rows() > 0)
            {
                $this->session->set_userdata('login', $username);
                redirect ('hal_admin');            
            }
            else{
                $data["alert_reg"] = "<p><b>*Username atau password salah</b></p>";
            }
        }        
         $this->load->view("login_admin",$data);       
    
    }

    public function logout_admin()
    {
        if($this->session->login != null)
        {
            $this->session->sess_destroy();
            redirect('do_login_admin');
        }else{
            show_404();
        }
    }
    // public function tambahadmin(){
    //     $this->load->model("admin_model");
    //     if($this->session->userdata("login") != ""){
    //     $level= $this->admin_model->getLevel();
    //     $levelisasi= $level->level;
    //     if($levelisasi == "admin"){
    //     // if(isset($_POST["insertadmin"])){
        
    //     // // $admin= $this->admin_model->list_admin($username);
    //     // $config['upload_path'] = './asset/img/fotoadmin/';
    //     // $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|docx|GIF|JPG|PNG|JPEG|PDF|DOC|XML|DOCX|xls|xlsx';
    //     // $config['max_size'] = 200048;
    //     // $config['file_name'] = $this->input->post('username');
    //     // $this->upload->initialize($config);
            
    //     //         if ( ! $this->upload->do_upload('uploadgambar'))//ini name di input choose file
    //     //         {
    //     //             // $pesan['tipe_pesan'] = 'alert-danger';
    //     //             // $pesan['pesan'] = $this->upload->display_errors();
    //     //             // $this->session->set_flashdata($pesan);
    //     //             // redirect('admin/alumni/ubah/'.$this->input->post('id_kader'));
    //     //         }
    //     //         else
    //     //         {
    //     //         // $foto_lama = $this->kader->getbyID($this->input->post('id_kader'))->foto;
    //     //         // unlink($config['upload_path'].$foto_lama);
        
    //     //         $datas = $this->upload->data();
    //     //         $edit['image_library'] = 'gd2';
    //     //         $edit['source_image']   = './asset/img/fotoadmin/'.$datas['file_name'];
    //     //         $edit['create_thumb'] = TRUE;
    //     //         $edit['maintain_ratio'] = TRUE;
    //     //         $edit['height'] = 600;
    //     //         $this->load->library('image_lib', $edit);
    //     //         $this->image_lib->resize();
    //     //         $edit_file = explode('.', $datas['file_name']);
    //     //         $data['foto'] = $edit_file[0].'_thumb.'.$edit_file[1];
    //     //         unlink($config['upload_path'].$datas['file_name']);
    //     //     }
    //     // $data['user_admin'] = $this->input->post('username');
    //     // $data['password'] = md5($this->input->post('password'));
    //     // $data['level'] = 'admin';
    //     //     $a = $this->admin_model->tambahAdmin($data);
    //     //     if($a)
    //     //     {
    //     //         redirect('daftaradmin'); 
    //     //     }
    //     //     else{
    //     //         echo "Insert data admin baru gagal, silahkan coba lagi";
    //     //     }   
    //     //      }

    //     } else{
    //             redirect('do_login_admin');
    //     }
    //         }else{
    //             redirect('do_login_admin');
    //         }

    //         $this->load->view('tambahadmin');
    // }
    
    public function daftaradmin()
    {
       if($this->session->userdata("login") != "")
        {
            
            $this->load->model("admin_model");
            $level= $this->admin_model->getLevel();
            $levelisasi= $level->level;
            if($levelisasi == "admin"){
                $session = $this->session->login;
                $d["listadmin"] = $this->admin_model->list_admin();
                $this->load->view("daftar_admin",$d);
                if(isset($_POST["insertadmin"])){
        
        // $admin= $this->admin_model->list_admin($username);
                $config['upload_path'] = './asset/img/fotoadmin/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|docx|GIF|JPG|PNG|JPEG|PDF|DOC|XML|DOCX|xls|xlsx';
                $config['max_size'] = 200048;
                $config['file_name'] = $this->input->post('username');
                $this->upload->initialize($config);
                    
                if ( ! $this->upload->do_upload('uploadgambar'))//ini name di input choose file
                {
                    // $pesan['tipe_pesan'] = 'alert-danger';
                    // $pesan['pesan'] = $this->upload->display_errors();
                    // $this->session->set_flashdata($pesan);
                    // redirect('admin/alumni/ubah/'.$this->input->post('id_kader'));
                }
                else
                {
                // $foto_lama = $this->kader->getbyID($this->input->post('id_kader'))->foto;
                // unlink($config['upload_path'].$foto_lama);
        
                $datas = $this->upload->data();
                $edit['image_library'] = 'gd2';
                $edit['source_image']   = './asset/img/fotoadmin/'.$datas['file_name'];
                $edit['create_thumb'] = TRUE;
                $edit['maintain_ratio'] = TRUE;
                $edit['height'] = 600;
                $this->load->library('image_lib', $edit);
                $this->image_lib->resize();
                $edit_file = explode('.', $datas['file_name']);
                $data['foto'] = $edit_file[0].'_thumb.'.$edit_file[1];
                unlink($config['upload_path'].$datas['file_name']);
                }
                $data['user_admin'] = $this->input->post('username');
                $data['password'] = md5($this->input->post('password'));
                $data['level'] = 'admin';
                    $a = $this->admin_model->tambahAdmin($data);
                    if($a)
                    {
                        redirect('daftaradmin'); 
                    }
                    else{
                        echo "Insert data admin baru gagal, silahkan coba lagi"; 
                        }   
                     }
        }else{
            redirect('do_login_admin');
        }
        }
        else
        {
            redirect ('do_login_admin');
        }
    }
    public function hapusadmin($id){
    if($this->session->userdata("login") != "")
    {   
        $this->load->model("admin_model");
        $level= $this->admin_model->getLevel();
        $super= $level->id_admin;
        if($super==1){                    
        $b = $this->admin_model->hapusAdmin($id);
        redirect('daftaradmin');       
    }
        else {
            show_404();
        }
    }
    else{
        redirect('do_login_admin');
    }

    }

  public function cetak($id){
   
        if($this->session->userdata("login") != "")
        {  
            $this->load->model("admin_model");
            $level= $this->admin_model->getLevel();
            $levelisasi= $level->level;
            if($levelisasi == "admin"){
                $session = $this->session->login;
                // $data["listuser"] = $this->admin_model->list_user();
                // $this->load->view("cetakuser",$data);
                
                // $data['listuser'] = $this->admin_model->view_row();
                // $this->load->view('cetaktransaksi', $data);
                ob_start();
                $data['transaksilengkap'] = $this->admin_model->view_row($id);
                $this->load->view('cetaktransaksi', $data);

                $html = ob_get_contents();
                ob_end_clean();
        
                require_once('./asset/html2pdf/html2pdf.class.php');
                $pdf = new HTML2PDF('P','A4','en');
                $pdf->WriteHTML($html);
                $pdf->Output('user.pdf', 'D');
        
        }else{
            redirect('do_login_admin');
        }
        }
        else
        {
            redirect ('do_login_admin');
        }
    }


}
