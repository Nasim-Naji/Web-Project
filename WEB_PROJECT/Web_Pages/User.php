<?php
    /**
     *
     */
    class User
    {
      private $id;
      private $login;
      private $email;
      private $gender;
      private $first_name;
      private $last_name;
      private $phonenumber;
      private $password_hash;

      function __construct($id=0,$login='',$email='',$gender='',$first_name='',$last_name='',$phonenumber='',$password_hash='')
      {
        $this->id=$id;
        $this->login=$login;
        $this->email=$email;
        $this->gender=$gender;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->phonenumber=$phonenumber;
        $this->password_hash=$password_hash;
      }


    public function setid($id)
    {
      $this->id = $id;
    }
    public function getid()
    {
        return $this->id;
    }

    public function setlogin($login)
    {
      $this->login = $login;
    }
    public function getlogin()
    {
        return $this->login;
    }


    public function setemail($email)
    {
      $this->email = $email;
    }
    public function getemail()
    {
        return $this->email;
    }


    public function setgender($gender)
    {
      $this->gender = $gender;
    }
    public function getgender()
    {
        return $this->gender;
    }

    public function setfirst_name($first_name)
    {
      $this->first_name = $first_name;
    }
    public function getfirst_name()
    {
        return $this->first_name;
    }


    public function setlast_name($last_name)
    {
      $this->last_name = $last_name;
    }
    public function getlast_name()
    {
        return $this->last_name;
    }


    public function setphonenumber($phonenumber)
    {
      $this->phonenumber = $phonenumber;
    }
    public function getphonenumber()
    {
        return $this->phonenumber;
    }

    public function setpassword_hash($password_hash)
    {
      $this->password_hash = $password_hash;
    }
    public function getpassword_hash()
    {
        return $this->password_hash;
    }



    }




 ?>
