<?php
defined('BASEPATH') or exit('No direct script access allowed');

class all extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        /*load Model*/
        $this->load->model('Job');
    }

    public function list($id)
    {
        $result['data'] = $this->Job->details($id);
        $this->load->view('templates/job_details', $result);
    }
}
