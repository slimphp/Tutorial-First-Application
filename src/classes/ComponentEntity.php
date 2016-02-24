<?php

class ComponentEntity
{
    protected $id;
    protected $name;

    /**
     * Accept an array of data matching properties of this class
     * and create the class
     *
     * @param array $data The data to use to create
     */
    public function __construct(array $data) {
        $this->id = $data['id'];
        $this->name = $data['component'];
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}
