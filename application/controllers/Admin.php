<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        $this->load->database();
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
    public function index()
    {
        if ($_SESSION['admin_logged'] == FALSE) {
            $this->session->set_flashdata("error", "Please Login");
            redirect('admin/login');
        }
        $this->load->view('admin/admin');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == TRUE) {

            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where(array('email' => $email, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();
            if ($user) {
                $this->session->set_flashdata('success', 'You are logged in');

                $_SESSION['admin_logged'] = TRUE;
                $_SESSION['email'] = $user->email;

                redirect('admin/index', 'refresh');
            } else {
                $this->session->set_flashdata('error_login', 'Invalid email or password');
                redirect('admin/login', 'refresh');
            }
        }

        $this->load->view('admin/login');
    }

    public function accept($id)
    {
        $query = $this->db->query("select * from pending where id='$id'");
        foreach ($query->result() as $row) {
            $name =  $row->name;
            $email =  $row->email;
            $password =  $row->password;
            $about =  $row->about;
            $country =  $row->country;
            $state =  $row->state;
            $address =  $row->address;
            $image =  $row->image;
            $created =  $row->created_at;
        }
        $all = $this->db->query("insert into company (name, email, password, about, country, state, address, image, created_at) values ('$name', '$email', '$password', '$about', '$country', '$state', '$address', '$image', '$created')");
        if ($all === True) {
            $this->session->set_flashdata('success', 'Accepted');
            redirect('admin/index', 'refresh');
        }
    }


    public function delete($id)
    {
        $query = $this->db->query("delete from pending where id='$id'");
        if ($query === True) {
            $this->session->set_flashdata('success', 'Deleted');
            redirect('admin/index', 'refresh');
        }
    }
}
