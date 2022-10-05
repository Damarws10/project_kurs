<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Login extends Controller
{
    public function index(){
        $data['nama'] = "login";
        return view('login', $data);
    }

     public function login_action()
    {
      $muser = new UserModel();

      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');

      $cek = $muser->get_data($email, $password);

      if (($cek['user_email'] == $email) && ($cek['user_pass'] == $password))
      {
         session()->set('user_email', $cek['user_email']);
         session()->set('user_nama', $cek['user_nama']);
         session()->set('user_id', $cek['user_id']);
         return redirect()->to(base_url('user'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('login'));
      }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}