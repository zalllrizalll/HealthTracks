<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login()
    {
        // validasi inputan pengguna
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // jika validasi gagal, tampilkan halaman login kembali
            $this->load->view('login');
        } else {
            // ambil data inputan pengguna
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // cek kebenaran email dan password
            $user = $this->auth_model->login($email, $password);

            if ($user) {
                // jika kebenaran berhasil di verifikasi, buat session baru
                $user_data = array(
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($user_data);

                // arahkan pengguna ke halaman dashboard
                redirect('dashboard');
            } else {
                // jika kebenaran gagal di verifikasi, tampilkan pesan kesalahan
                $this->session->set_flashdata('login_failed', 'Maaf, email atau password salah.');
                redirect('Auth/login');
            }
        }
    }
    // Function register
    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password_confirm]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!',
        ]);
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];

            $this->user_model->register($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please login</div>');
            redirect('Auth/login');
        }
    }
}