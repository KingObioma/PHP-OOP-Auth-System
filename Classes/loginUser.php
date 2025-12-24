<?php
class userManager{
    private $db;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    

    public  function __construct($db, $email, $password){
        $this->db = $db;
        $this->email = $email;
        $this->password = $password;        
    }
    public function selectClientByEmail($email) {
        try {
            $conn = $this->db->connect();
            $stmt = $conn->prepare("SELECT * FROM clients WHERE email = :email");
            $stmt->bindParam(':email', $email);            
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);            
            return $result;
        } catch(PDOException $e) {
            echo 'Error selecting client: ' . $e->getMessage();
            return null;
        }
    }

}