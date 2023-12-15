<?php

class PHP_Email_Form
{
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $smtp;

    public $ajax = false;

    protected $messages = array();

    public function add_message($content, $type = 'info')
    {
        $this->messages[] = array('content' => $content, 'type' => $type);
    }

    public function send()
    {
        $this->add_message('This is a test message.');

        return 'OK';
    }
}

