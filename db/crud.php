<?php
    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }

        public function insert($fname, $lname, $dob, $email, $contact, $specialty){
            try {
                $sql = "INSERT INTO attendee VALUES (:fname, :lname, :dob, :email, :contact, :specialty)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindpram(':fname', $fname);
                $stmt->bindpram(':lname', $lname);
                $stmt->bindpram(':dob', $dob);
                $stmt->bindpram(':email', $email);
                $stmt->bindpram(':specialty', $specialty);

                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendees(){
            try {
                $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
                $result = $this->db->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
           
         }

         /*public function getAttendeeDetails($id){
            try { 
                   $sql = "select * from attendee 
                   a inner join specialties s on a.specialty_id = s.specialty_id where attendee_id = ";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindpram('id', $id);
                    $stmt->execute();
                    $result = $stmt->fetch();
                    return $result;
            } catch
                (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }*/

         public function getSpecialties(){
            $sql = "SELECT * FROM `specialties`";
            $result = $this->db->query($sql);
            return $result; 
         }

         

    }

        


?>