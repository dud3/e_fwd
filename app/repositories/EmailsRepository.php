<?php

use Carbon\Carbon;

class EmailsRepository implements EmailsRepositoryInterface {

    public $server;
    public $server_name = 'imap.gmail.com';
    public $username = 'notifications@acsbill.com';
    public $password = '8655morro';

    public $inbox;
    public $emails;

    public $user;


    /**
     * [__construct description]
     */
    public function __construct() {

        $this->server = new \Fetch\Server($this->server_name, 993);
        $this->server->setAuthentication($this->username, $this->password);

        $this->inbox = $this->server->getMessages();

        // Read the inbox
        $this->emails = $this->inbox;

    }


 	/**
     * Read all the emails.
     * @return [type] [description]
     */
    public function readMails() {

        $emails = $this->emails;

        $std_email = new StdClass;
        $arr_emails = [];

        var_dump("We have " . count($emails) . " Emails");

        foreach ($emails as $message) {

            $std_email->header = $message->getHeaders();
            $std_email->overview = $message->getOverview();
            $std_email->address = $message->getAddresses('from');
            $std_email->subject = $message->getSubject();
            $std_email->body = $message->getMessageBody();
            $std_email->date = $message->getDate();

            $arr_emails[] = $std_email;

            $this->storeMail($std_email);
            $this->getEmailKeywords($std_email->subject);
            $this->getEmailBody($std_email->body);

        }

        // var_dump($arr_emails);

    }


    /**
     * Remove emails.
     * @return [type] [description]
     */
    public function removeMails($all = false, $id = null) {
          return imap_delete();
    }


    /**
     * Get the subject of the email.
     * @return [type] [description]
     */
    public function getEmailSubject() {

    }

    /**
     * Get the body of the email.
     * @return [type] [description]
     */
    public function getEmailBody() {

    }


    /**
     * Get the keywords fro mthe email.
     * @return [type] [description]
     */
    public function getEmailKeywords($data) {
        $keywords =  explode(" ", $data);
        var_dump($keywords);
    }


    /**
     * Sotore emails in the database.
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function storeMail($data) {

    }


    /**
     * Store Keywords
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function storeKeywords($data) {
        var_dump($data);
    }

}