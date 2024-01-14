<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('upload_model');
    }

    public function index()
    {
        $this->load->view('document');
    }

    public function proses_upload()
    {
        $result = $this->upload_model->upload();

        if (is_array($result) && !empty($result['upload_data'])) {
            $this->session->set_flashdata('success_upload', 'Berhasil mengupload file');
            redirect('document');
        } else {
            $this->session->set_flashdata('error_upload', $result['error']);
            redirect('document');
        }
    }
}