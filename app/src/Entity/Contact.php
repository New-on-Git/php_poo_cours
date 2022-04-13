<?php

namespace M2i\Poo\Entity;

class Contact{
    private $name;
    private $email;

    public function __construct($data = [])
    {
        foreach($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if(method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}