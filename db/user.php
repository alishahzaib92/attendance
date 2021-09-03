<?php 
    /*class user{
     private $db;

     function __construct($conn){
         $this->db = $conn;
     }*/

    /* public function InsertUser($username, $password){
        try {
            $sql = "INSERT INTO users(firstname, password)
            VALUES (:username, :password);
            $stmt = $this->db->prepare($sql);

            $stmt->bindpram(':username', $username);
            $stmt->bindpram(':password', $password);
            

            $stmt->execute();
            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }
     }*/

     /* public function getUser($username, $password){
       try { 
                   $sql = "select * from users where username= :username AND password=:password";
                      $stmt = $this->db->prepare($sql);
                    $stmt->bindpram('id', $id);
                    $stmt->execute();
                    $result = $stmt->fetch();
                    return $result;
                } catch
                    (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                    }
        }/


    }

?>