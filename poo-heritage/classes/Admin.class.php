<?php

class Admin extends User{
    protected $admin;


    public function __construct($name, $password, $admin){
        $this->admin=$admin;
        parent::__construct($name, $password);
     }

    public function getAdmin(){
         return $this->admin;
     }
}