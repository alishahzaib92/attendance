<?php
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialties();
    
?>

<!--    first name
        last name
        date of birth
        speciality
        email
        contact
-->


    <h1 class="text-center">Registration for IT confrance</h1>

    <form method="get" action="success.php">
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input required type="text" class="form-control" id="firstname" aria-describedby="firstname"
            placeholder="Enter First Name" name="firstname">
            
        </div>   
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="lastname" placeholder="Enter Last Name">
            
        </div>
        <div class="form-group">
            <label for="dob">date of birth</label>
            <input type="text" class="form-control" name="dob" id="dob" aria-describedby="dob"
             placeholder="Enter date of birth">
                   </div>
        <div class="form-group">
            <label for="specialty">area of expertices</label>
                <select class="form-control" name="specialty" id="specialty">
                    <option value="3">Data base admin</option>
                    <option>software developer</option>
                    <option>etc</option>
                    <option>dajs</option>
                    <option>adsf</option>
                </select>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">contact no</label>
            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone number">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
        </div>
        
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<br>
<br>
<br>


    <?php require_once 'includes/footer.php'; ?>   