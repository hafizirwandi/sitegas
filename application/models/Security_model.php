<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Security_model extends CI_Model
{

    public function isLogin()
    {
        if ($this->session->userdata('islogin') != 'TRUE') {
            $alert = alert('danger', 'Silahkan masuk untuk melanjutkan sesi anda!');
            $this->session->set_flashdata('message', $alert);
            redirect('login');
        }
    }
}
