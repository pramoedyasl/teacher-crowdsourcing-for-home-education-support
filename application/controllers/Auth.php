<?php 
class Auth extends CI_Controller
{

    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect("","refresh");
    }

    public function showlogin()
    {
        $this->load->view('login');
    }

    public function showhome()
    {
        $this->load->view('Home');
    }

    public function showabout()
    {
        $this->load->view('About');
    }
    
    public function showprofilee()
    {
        $this->load->view('profilee');
    }
    

    public function login()
    {   
        
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        if($this->form_validation->run() == TRUE){

            $username = $_POST['username'];
            $password = md5($_POST['password']);
            //check users in database
            $this->db->select('*');
            $this->db->from('tb_user');
            $this->db->where(array('username'=>$username,'password'=>$password));
            $query = $this->db->get();

            $user = $query->row();
            // if user exists
            if($user->email){
                // temporary message
                $this->session->set_flashdata("success","You are logged in");

                // set session variables
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;
                // redirect to profile page
                $this->load->view('Home');
            }else {
                $this->session->set_flashdata("error","No such account exists in database");
                redirect("auth/login","refresh");
            }
        }

        
    }

    public function register()
    {
        if(isset($_POST['register'])){
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password','Re-Enter Password','required|min_length[5]|matches[password]');
            // if form true
            if($this->form_validation->run() == TRUE){
                echo 'form validated';
                // add user in database
                $data = array(
                    'email' =>$_POST['email'],
                    'username' =>$_POST['username'],
                    'password' =>md5($_POST['password'])
                );
                $this->db->insert('tb_user',$data);

                $this->session->set_flashdata("success","Your account has been registered. You can login now");
                redirect("auth/showlogin","refresh");
            }
        }
        // load view
        $this->load->view('register');
    }
}