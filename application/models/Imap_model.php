<?php
class Imap_model extends CI_Model {

	public function __construct() {
        $this->load->model('email_entity');
        $this->load->library('imap');
        $this->load->library('doctrine');

    }

    public function save() {
        $connect = $this->imap->connect(); // TODO error handling

        $mc = $this->imap->fun('check');
        $emails = $this->imap->fun('fetch_overview', "1:{$mc->Nmsgs}");
        $em = $this->doctrine->em;

        foreach($emails as $email) {
            $individualEmail = $this->imap->get_message($email->uid);
            //save to DB
            $email = new Email_Entity();
            $email->setUid($individualEmail['uid']);
            $email->setFromEmail($individualEmail['from']['email']);
            $email->setFromName($individualEmail['from']['name']);
            $email->setSubject($individualEmail['subject']);
            $email->setBody($individualEmail['body']);

            $em->persist($email);
            $em->flush();
        }


    }



}