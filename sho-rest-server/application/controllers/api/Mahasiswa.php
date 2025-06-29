<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mahasiswa extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model'); // Load model
    }

    public function index_get()
    {
        $mahasiswa = $this->Mahasiswa_model->getMahasiswa(); // Perbaikan $this->
        
        if($mahasiswa) {
            $this->response([
                'status' => true,
                'data' => $mahasiswa
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>