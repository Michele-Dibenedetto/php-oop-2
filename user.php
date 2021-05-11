<?php
class Users {
    public $id;
    public $name;
    public $surname;
    private $eta;
    private $email;
    public $username;
    private $password;
    public $tipo_user;

    public function __construct($_name, $_surname, $_tipo_user, $_id)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->tipo_user = $_tipo_user;
        $this->id = $_id;
    }

    // SET E GET ETA
    public function setEta($_eta) {
        if (is_int($_eta) && $_eta > 0 && $_eta < 130) {
            $this->eta = $_eta;
        }
    }
    
    public function getEta() {
        return $this->eta;
    }

    // SET E GET EMAIL
    public function setEmail($_email) {
        if (filter_var($_email, FILTER_VALIDATE_EMAIL) != false) {
            $this->email = $_email;
        }
    }

    public function getEmail() {
        return $this->email;
    }

    // SET E GET USERNAME
    public function setUsername($_username) {
        trim($_username);
        $this->username = $_username;
    }

    // SET E GET PASSWORD
    public function setPassword($_password) {
        trim($_password);
        if (strlen($_password) > 3) {
            $this->password = $_password;
        }
    }

    public function getPassword() {
        return $this->password;
    }


}