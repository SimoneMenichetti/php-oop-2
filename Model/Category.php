<?php

class Category {
    public string $name;
    public string $iconClass;

    // Costruttore
    public function __construct(string $name, string $iconClass) {
        $this->name = $name;
        $this->iconClass = $iconClass;
    }

    // Getter
    public function getName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->iconClass;
    }
}
?>