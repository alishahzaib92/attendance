<?php
    $title = 'view records';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
    
    $results = $crud->getAttendees();
?>


<table class="table">
    <tr>
        <th>#</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>dateofbirth</th>
        <th>emailaddress</th>
        <th>contactnumber</th>
        <th>specialty</th>
        <th>actions</th>
    </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
                <td> <?php echo $r['attendee_id'] ?></td>
                <td> <?php echo $r['firstname'] ?></td>
                <td> <?php echo $r['lastname'] ?></td>
                <td> <?php echo $r['dateofbirth'] ?></td>
                <td> <?php echo $r['emailaddress'] ?></td>
                <td> <?php echo $r['contactnumber'] ?></td>
                <td> <?php echo $r['name'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">view</a>
                    <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">edit</a>
                    <a onclick="return confirm('Are you sure to want to delete this record');" 
                     href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">delete</a>
                </td>

            </tr>


        <?php } ?>


    
</table>


<br>
<br>
<br>


    <?php require_once 'includes/footer.php'; ?>   