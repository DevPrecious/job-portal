<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

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
    public function join()
    {

        $this->load->view('templates/register.php');
    }

    public function register()
    {
        if (isset($_POST['signin'])) {
            $this->form_validation->set_rules('name', 'Full name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            if ($this->form_validation->run() == TRUE) {
                //echo 'form validated';
                $data = array(
                    'fname' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'created_at' => date('Y-m-d')
                );
                $query = $this->db->query("select * from users where email = '$data[email]'");
                if ($query === True) {
                    $this->session->set_flashdata("error", "Email has been taken");
                    redirect('auth/join', 'refresh');
                } else {
                    $this->db->insert('users', $data);

                    $this->session->set_flashdata("success", "Your account has been created, you can now login");
                    redirect('auth/join', 'refresh');
                }
            }
        }
        $this->load->view('templates/register.php');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == TRUE) {

            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('email' => $email, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();
            if ($user) {
                $this->session->set_flashdata('success_login', 'You are logged in');

                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->email;

                redirect('user/home', 'refresh');
            } else {
                $this->session->set_flashdata('error_login', 'Invalid email or password');
                redirect('auth/join', 'refresh');
            }
        }

        $this->load->view('templates/register.php');
    }
}
