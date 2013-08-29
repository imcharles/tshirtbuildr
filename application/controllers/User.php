<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class User extends Main {

     public function __construct()
     {
          parent::__construct();
     }
     
     // shows the profile page
     public function profile()
     {
          // get the user's information using the session
          $this->load->model('User_model');

          $user_session = $this->session->userdata('user_session');

          // get the user that is currently logged in
          $user = $this->User_model->get_user_by_id($this->user_session['id']);

          // passes the user info to the view page
          $this->view_data['user'] = $user;

          // Now all you need to do is to show the user information in the view :)
          $this->load->view('profile', $this->view_data);
     }

     // shows the login/registration page
     public function login()
     {
          // sets the register errors from flashdata
          // flashdata is like session but gets unset after it gets displayed
          $this->view_data['register_errors'] = $this->session->flashdata('register_errors');
          
          // sets the success message once a user has successfully registered
          $this->view_data['register_success'] = $this->session->flashdata('register_success');

          // sets the login errors from flashdata
          $this->view_data['login_errors'] = $this->session->flashdata('login_errors');

          // displays the login_view from the views folder
          // and pass in the $this->view_data to be accessible to our view
          $this->load->view('home', $this->view_data);
     }

     // processes user login
     function process_login()
     {
          $this->load->model('User_model');

          // user info to be passed
          $user_info = array(
               'email' => $this->input->post('email'),
               'password' => md5($this->input->post('password'))
          );

          // check the user if its in the database
          $check_user = $this->User_model->get_user($user_info);

          // if the user is in the database, we'll login the user:
          if($check_user)
          {
               $this->session->set_userdata('user_session', $check_user);

               redirect('/user/profile');
          }
          // if no user was found in the database, we'll echo out errors
          else
          {
               $this->session->set_flashdata('login_errors', 'Invalid email/password combination!');

               redirect('/');
          }
     }

     // processes user registration
     public function process_register()
     {
          // set the validation rules
          $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
          $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[2]');
          $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[2]');
          $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|md5');
          $this->form_validation->set_rules('confirm_password', 'Confirm password', 'matches[password]|md5');

          // if validation failed:
          if($this->form_validation->run() === FALSE)
          {
               $this->session->set_flashdata('register_errors', validation_errors());
               redirect('/');
          }
          // if validation is successful:
          else
          {
               // information to be passed to the database
               $user_info = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password')
               );

               $this->load->model('User_model');
               $this->User_model->register_user($user_info);
               $this->session->set_flashdata('register_success', 'You have successfully registered!');
               $this->session->set_userdata('user_session', $user_info);
               
               redirect('/');
          }

     }

     // processes user logout
     public function logout()
     {
          $this->session->sess_destroy();
          redirect('#');
     }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
