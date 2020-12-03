<?php

class Direction {
    private $id;
    private $content;
    private $displayOrder;

    function __constructor() {
        $this->id = 0;
        $this->content = "";
        $this->displayOrder = 0;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($data) {
        $this->id = $data;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($data) {
        $this->content = $data;
    }

    public function getDisplayOrder() {
        return $this->displayOrder;
    }

    public function setDisplayOrder($data) {
        $this->displayOrder = $data;
    }
}

?>