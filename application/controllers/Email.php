<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct() {
            parent::__construct();
			$this->load->model('imap_model');
	}

	public function index() {

    }

    public function save(){

        $this->imap_model->save();

        

    }

}
