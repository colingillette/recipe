<?php

include("uom.php");

class Ingredient {
    private $id;
    private $name;
    private $unitOfMeasure;
    private $amount;
    private $displayOrder;

    function __constructor() {
        $this->id = 0;
        $this->name = "";
        $this->unitOfMeasure = new UnitOfMeasure();
        $this->amount = 0;
        $this->displayOrder = 0;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($data) {
        $this->id = $data;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($data) {
        $this->name = $data;
    }

    public function getUnitOfMeasure() {
        return $this->unitOfMeasure;
    }

    public function setUnitOfMeasure($data) {
        $this->unitOfMeasure = $data;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($data) {
        $this->amount = $data;
    }

    public function getDisplayOrder() {
        return $this->displayOrder;
    }

    public function setDisplayOrder($data) {
        $this->displayOrder = $data;
    }
}

?>