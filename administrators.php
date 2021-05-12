<?php

class Administrators extends Users {
    public $subordinates;

    public function setUser() {
        $this->tipo_user = "amministratore";
    }

    public function getUser() {
        return $this->tipo_user;
    }
}
