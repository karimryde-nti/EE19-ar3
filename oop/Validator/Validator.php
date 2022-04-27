<?php
class UserValidator {

    // Egenskaper
    private $data;

    // Konstruktor
    public function __construct($postData)
    {
        $this->data = $postData;
    }

    // Metoderna
    public function ValidateUsername()
    {
        // Kolla längd 5-15 tecken
        if (strlen($this->data['username']) < 5 || strlen($this->data['username']) > 15) {
            echo "<p class=\"alert alert-warning\">Användarnamnet måste vara 5-15 tecken</p>";
        }
    }
    public function ValidateEmail()
    {
        // Kolla längd 10-25 tecken
        if (strlen($this->data['email']) < 10 || strlen($this->data['email']) > 25) {
            echo "<p class=\"alert alert-warning\">Email måste vara 10-25 tecken</p>";
        }
    }
}