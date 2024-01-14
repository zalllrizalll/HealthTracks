<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model
{
    public function login($email, $password)
    {
        // ambil data pengguna berdasarkan email
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {
            // ambil data pengguna yang pertama
            $user = $query->row();

            // verifikasi kebenaran password
            if (password_verify($password, $user->password)) {
                return $user;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    // Register
    public function register($data)
    {
        $this->db->insert('user', $data);
    }
}