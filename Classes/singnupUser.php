<?php
class userManager{
    private $db;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    

    public  function __construct($db, $firstName, $lastName, $email, $password){
        $this->firstName = $firstName;
        $this->db = $db;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;        
    }

    public function addUser(){
        $conn = $this->db->connect();
        $query = "INSERT INTO clients (`first_name`, `last_name`, `email`, `password`) VALUES (:first_name, :last_name, :email, :userPassword);";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':first_name', $this->firstName);
        $stmt->bindParam(':last_name', $this->lastName);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':userPassword', $this->password);
        $stmt->execute();
    }    
}