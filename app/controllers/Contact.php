<?php

class Contact extends Controller {
    public function index(){
        $contact = $this->model('ContactModel');
        $contact->your_email = 'not set';
        $this->view('contact', ['title'=>'Contact Page', 'contact'=>$contact]);
    }


    public function message($email = 'not set'){
        $contact = $this->model('ContactModel');
        $contact->your_email = $email;
        $this->view('contact', ['title'=>'Contact Page', 'contact'=>$contact]);
    }
}