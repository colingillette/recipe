<?php

class UnitOfMeasure {
    private $id;
    private $abreviation;
    private $fullName;

    function __constructor() {
        $this->id = 0;
        $this->abreviation = "";
        $this->fullName = "";
    }

    public function getId() {
        return $this->id;
    }

    public function setId($data) {
        $this->id = $data;
    }

    public function getAbreviation() {
        return $this->abreviation;
    }

    public function setAbreviation($data) {
        $this->abreviation = $data;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function setFullName($data) {
        $this->fullName = $data;
    }
}

?>