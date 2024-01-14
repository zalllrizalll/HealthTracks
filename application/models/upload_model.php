<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function upload() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif|mp4|pdf|psd|ai|doc|docx|ppt|pptx';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            return $data;
        }
    }
}