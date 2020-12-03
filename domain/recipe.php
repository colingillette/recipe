<?php

class Recipe {
    private $id;
    private $name;
    private $description;
    private $creator;
    private $creationDate;
    private $lastEditDate;
    private $hours;
    private $minutes;
    private $views;
    private $ingredients = array();
    private $directions = array();

    function __constructor() {
        $this->id = 0;
        $this->name = "";
        $this->description = "";
        $this->creator = "Anonymous";
        $this->creationDate = "01-01-2020";
        $this->lastEditDate = "01-01-2020";
        $this->hours = 0;
        $this->minutes = 0;
        $this->views = 0;
    }

    function comparatorFunction($x, $y) 
    {    
        if ($x->id == $y->id) 
            return 0; 
        if ($x->id < $y->id) 
            return -1; 
        else
            return 1; 
    } 

    public function getId() {
        return $this->id;
    }

    public function setID($data) {
        $this->id = $data;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($data) {
        $this->name = $data;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($data) {
        $this->description = $data;
    }

    public function getCreator() {
        return $this->creator;
    }

    public function setCreator($data) {
        $this->creator = $data;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

    public function setCreationDate($data) {
        $this->creationDate = $data;
    }

    public function getLastEditDate() {
        return $this->lastEditDate;
    }

    public function setLastEditDate($data) {
        $this->lastEditDate = $data;
    }

    public function getHours() {
        return $this->hours;
    }

    public function setHours($data) {
        $this->hours = $data;
    }

    public function getMinutes() {
        return $this->minutes;
    }

    public function setMinutes($data) {
        $this->minutes = $data;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($data) {
        $this->views = $data;
    }

    public getIngredients() {
        usort($this->ingredients, "comparatorFunction");
        return $this->ingredients;
    }

    public addIngredient($data) {
        array_push($this->ingredients, $data);
    }

    public getDirections() {
        usort($this->directions, "comparatorFunction");
        return $this->directions;
    }

    public addDirection($data) {
        array_push($this->directions, $data);
    }
}

?>