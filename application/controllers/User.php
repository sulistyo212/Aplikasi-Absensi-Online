<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('User_model', 'user');
    }

    public function index()
    {
        $id_user = $this->session->id_user;
        $data['user'] = $this->user->find_by('id_user', $id_user, true);
        return $this->template->load('template', 'edit_profil', $data);
    }

    public function edit_profil()
    {
        $post = $this->input->post();
        $data = [
            'nip' => $post['nip'],
            'nama' => $post['nama'],
            'telp' => $post['telp'],
            'email' => $post['email'],
        ];

     
        $result = $this->user->update_data($this->session->id_user, $data);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Profil berhasil diubah!'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Profil gagal diubah!'
            ];
        }
        
        $this->session->set_flashdata('response', $response);
        redirect('user');
    }
}


