<?php
    $title = 'view Records';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
    if(isset($_REQUEST['id'])){
        echo "<h1 class='text-danger'>please check details and try again</h1>";
            
    }else{
        $id = $_REQUEST['id'];
        $results = $crud->getAttendeeDetails($id);   
    
   
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">
              <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
      </h5>
      <h6 class="card-subtitle mb-2 text-muted">
              <?php echo $result['specialty']; ?>
      </h6>
      <p class="card-text">
            Date of Birth  <?php echo $result['dob']; ?>
      </p>
      <p class="card-text">
           Email Address:   <?php echo $result['email']; ?>
      </p>
      <p class="card-text">
           Contact number:   <?php echo $result['phone']; ?>
      </p>
    
  </div>

  <a href="viewrecords.php" class="btn btn-primary">back to list</a>
                    <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">edit</a>
                    <a onclick="return confirm('Are you sure to want to delete this record');" 
                     href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">delete</a>
 <?php } ?>


<br>
<br>
<br>


    <?php require_once 'includes/footer.php'; ?>   