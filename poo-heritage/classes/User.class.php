<?php
// namespace maClasse;
class User{
    protected $name;
    protected $password;

    public function __construct($n, $p){
        $this->name = $n;
        $this->password = $p; 
     }

    public function getName():mixed{
      return  $this->name;
     }

    public function getPassword():mixed{
      return  $this->password;
     }

}

