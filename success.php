<?php
    $title = 'success';
    require_once 'includes/header.php';
    
    
    if(isset($_POST['submit'])){
      $fname = $REQUEST['firstname'];
      $lname = $REQUEST['lastname'];
      $dob = $REQUEST['dob'];
      $email = $REQUEST['email'];
      $contact = $REQUEST['phone'];
      $specialty = $REQUEST['specialty'];



      $isSuccess = $crud->insert($fname, $lname, $db, $email,);
    

      if($isSuccess){
          echo '<h1 class="text-center text-success">You have been registered</h1>';
      }
      else{
        echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
      }
    }
?>




</div>




<?php require_once 'includes/footer.php'; ?>   