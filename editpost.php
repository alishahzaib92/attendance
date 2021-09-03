<?php 
    

    if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $isSuccess = $crud->insert($fname, $lname, $db, $email,);
}

?>