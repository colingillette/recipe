<?php

include("roles.php");

class User {
    private $id;
    private $username;
    private $displayName;
    private $joinDate;
    private $lastLogin;
    private $role;
    private $isLoggedIn;

    function __constructor() {
        $this->id = 0;
        $this->username = "";
        $this->displayName = "";
        $this->joinDate = "01-01-2020";
        $this->lastLogin = "01-01-2020";
        $this->role = Roles::Read;
        $this->isLoggedIn = false;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($data) {
        $this->id = $data;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($data) {
        $this->username = $data;
    }

    public function getDisplayName() {
        return $this->displayName;
    }

    public function setDisplayName($data) {
        $this->displayName = $data;
    }

    public function getJoinDate() {
        return $this->joinDate;
    }

    public function setJoinDate($data) {
        $this->joinDate = $data;
    }

    public function getLastLogin() {
        return $this->lastLogin;
    }

    public function setLastLogin($data) {
        $this->lastLogin = $data;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($data) {
        $this->role = $data;
    }

    public function getIsLoggedIn() {
        return $this->isLoggedIn;
    }

    public function setIsLoggedIn($data) {
        $this->isLoggedIn = $data;
    }
}

?>