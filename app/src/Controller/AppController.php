<?php

namespace M2i\Poo\Controller;

use M2i\Framework\AbstractController;
use M2i\Poo\Entity\Contact;

class AppController extends AbstractController 
{
    public function index()
    {
        echo $this->render('index.php',['name' => 'toto']);
    }

    public function contact()
    {
        // $user = 'root';
        // $pass = 'root';

        // $dbh = new \PDO('mysql:host=localhost:3306;dbname=CONTACT', $user, $pass);
        // $sth = $dbh->query('SELECT * FROM CONTACT');



        $contact = new Contact;
        $contact->setName('toto')->setEmail('tamer@tamer.fr');
        
        echo $this->render('contact.php',['contact' => $contact, 'data'=> $sth]);
       
    }
}