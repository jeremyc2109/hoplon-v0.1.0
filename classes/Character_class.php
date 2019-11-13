<?php

class Character {
    
    private $_strength;
    private $_agility;
    private $_stamina;
    private $_speed;

    public function __construct($strength, $agility, $stamina, $speed) {
        $this->setStrength($strength);
        $this->setAgility($agility);
        $this->setStamina($stamina);
        $this->setSpeed($speed);
    }

    // Getters
    public function getStrength() {
        return $this->_strength;
    }

    public function getAgility() {
        return $this->_agility;
    }

    public function getStamina() {
        return $this->_stamina;
    }

    public function getSpeed() {
        return $this->_speed;
    }

    // Setters
    public function setStrength($strength) {
        $this->_strength = $strength;
    }

    public function setAgility($agility) {
        $this->_agility = $agility;
    }

    public function setStamina($stamina) {
        $this->_stamina = $stamina;
    }

    public function setSpeed($speed) {
        $this->_speed = $speed;
    }
}
?>