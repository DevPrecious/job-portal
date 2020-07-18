<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {
            $this->session->set_flashdata("error", "Please Login");
            redirect('auth/join');
        }
        $this->load->database();

        /*load Model*/
        $this->load->model('Profile');
    }

    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        $this->session->set_flashdata("error", "Successfully Logged out");
        redirect('auth/join', 'refresh');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function home()
    {
        if ($_SESSION['user_logged'] == FALSE) {
            $this->session->set_flashdata("error", "Please Login");
            redirect('auth/join');
        }
        $email = $_SESSION['username'];
        $result['data'] = $this->Profile->display_records($email);

        $this->load->view('templates/dashboard.php', $result);
    }

    public function update()
    {
        $email1 = $_SESSION['username'];
        if (isset($_POST['save'])) {
            //Check whether user upload picture
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                } else {
                    $picture = '';
                }
            } else {
                $picture = '';
            }
            //Check whether user upload picture
            if (!empty($_FILES['pdf']['name'])) {
                $config['upload_path'] = 'uploads/pdf/';
                $config['allowed_types'] = 'pdf|PDF';
                $config['file_name'] = $_FILES['pdf']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('pdf')) {
                    $uploadData = $this->upload->data();
                    $pdffile = $uploadData['file_name'];
                } else {
                    $pdffile = '';
                }
            } else {
                $pdffile = '';
            }
            $data = array(
                'fname' => $_POST['fname'],
                'email' => $_POST['email'],
                'image' => $picture,
                'pdf' => $pdffile
            );
            $this->db->where('email', $email1);
            $this->db->update('users', $data);

            $this->session->set_flashdata("success", "Updated");
            redirect('user/home', 'refresh');
        }
    }
}
