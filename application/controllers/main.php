<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	// data that we will pass into view pages
	protected $view_data = array();

	// user info will be saved here once a user logs in
	protected $user_session = NULL;

	public function __construct()
	{
		parent::__construct();

		// saves the session data to the $this->user_session variable
		$this->user_session = $this->session->userdata('user_session');
	}
}