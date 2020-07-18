<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{



    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        $this->session->set_flashdata("error", "Successfully Logged out");
        redirect('company/join', 'refresh');
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
    public function emp()
    {
        if ($_SESSION['com_logged'] == FALSE) {
            $this->session->set_flashdata("error_login", "Please Login");
            redirect('company/join');
        }
        $this->load->view('templates/emp');
    }

    public function join()
    {
        $this->load->view('templates/company.php');
    }

    public function register()
    {
        if (isset($_POST['signin'])) {

            $this->form_validation->set_rules('name', 'Full name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('about', 'About', 'required');
            $this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            if ($this->form_validation->run() == TRUE) {
                //Check whether user upload picture
                if (!empty($_FILES['image']['name'])) {
                    $config['upload_path'] = 'uploads/companies/';
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

                //echo 'form validated';
                $data = array(
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'about' => $_POST['about'],
                    'country' => $_POST['country'],
                    'state' => $_POST['state'],
                    'address' => $_POST['address'],
                    'image' => $picture,
                    'created_at' => date('Y-m-d')
                );
                $this->db->insert('pending', $data);

                $this->session->set_flashdata("success_create", "Your account has been created, we will verify and get back to you soon");
                redirect('company/join', 'refresh');
            }
        }
        $this->load->view('templates/company');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == TRUE) {

            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('company');
            $this->db->where(array('email' => $email, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();
            if ($user) {
                $this->session->set_flashdata('success_login', 'You are logged in');

                $_SESSION['com_logged'] = TRUE;
                $_SESSION['email'] = $user->email;

                redirect('company/emp', 'refresh');
            } else {
                $this->session->set_flashdata('error_login', 'Invalid email or password');
                redirect('company/join', 'refresh');
            }
        }

        $this->load->view('templates/register.php');
    }

    public function update()
    {
        $email1 = $_SESSION['email'];
        if (isset($_POST['save'])) {
            //Check whether user upload picture
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = 'uploads/companies/';
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

            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'about' => $_POST['about'],
                'country' => $_POST['country'],
                'state' => $_POST['state'],
                'address' => $_POST['address'],
                'image' => $picture,
            );
            $this->db->where('email', $email1);
            $this->db->update('company', $data);

            $this->session->set_flashdata("success", "Updated");
            redirect('company/emp', 'refresh');
        }
        $this->load->view('templates/emp');
    }

    public function put()
    {
        if (isset($_POST['add'])) {
            //Check whether user upload picture
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = 'uploads/jobs/';
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

            $data = array(
                'name' => $_POST['name'],
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'first' => $_POST['first'],
                'sec' => $_POST['sec'],
                'third' => $_POST['third'],
                'fourth' => $_POST['fourth'],
                'last' => $_POST['last'],
                'qualification' => $_POST['qualification'],
                'benefit' => $_POST['benefit'],
                'salary' => $_POST['salary'],
                'vacancy' => $_POST['vacancy'],
                'status' => $_POST['status'],
                'experience' => $_POST['experience'],
                'location' => $_POST['location'],
                'gender' => $_POST['gender'],
                'deadline' => $_POST['deadline'],
                'image' => $picture,
                'posted_at' => date('Y-m-d')
            );
            $this->db->insert('jobs', $data);
            $this->session->set_flashdata("success", "Job as been posted");
            redirect('company/emp', 'refresh');
        }
        $this->load->view('templates/emp');
    }
}
