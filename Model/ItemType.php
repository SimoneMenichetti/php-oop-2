<?php

class ItemType {
    public string $name;

    // Costruttore
    public function __construct(string $name) {
        $this->name = $name;
    }

    // Getter
    public function getName() {
        return $this->name;
    }
}
?>