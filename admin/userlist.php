<?php include "includes/header.php";
include "includes/topbar.php";
include "includes/sidebar.php";
include '../dbconnect/config.php';
?>

<section>
    <div class="container p-4">
        <div class="row">
            <table class="table">
                <tr class="table-primary text-center">
                    <th>#Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php 
                    $query = "SELECT * FROM registration";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run)>0){
                        while($row = mysqli_fetch_assoc($query_run)){
                            ?>
                            <tr class="text-center table-success">
                                <td><?=$row['id']?></td>
                                <td><?=$row['firstname']?></td>
                                <td><?=$row['lastname']?></td>
                                <td><?=$row['email']?></td>
                                <td><?=$row['phone']?></td>
                                <td><?=$row['password']?></td>
                                <td><?=$row['role']?></td>
                                <td><?=$row['timestamp']?></td>
                                <td><a href="<?php echo "updateuser.php?id=$row[id]"; ?>" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a></td>
                                <td><a href="<?php echo "deleteuser.php?id=$row[id]"; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a></td>
                            </tr>
                        <?php
                        }
                    } ?>
                    
                
            </table>
        </div>
    </div>
</section>

<?php include "includes/footer.php"?>