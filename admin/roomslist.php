<?php include "includes/header.php";
include "includes/topbar.php";
include "includes/sidebar.php";
include '../dbconnect/config.php';
?>
<section>
    <div class="container p-4">
        <div class="row">
            <a href="addrooms.php"><h1>Add Rooms</h1></a>
            <table class="table">
                <tr class="table-primary text-center">
                    <th>#Id</th>
                    <th>Room Name</th>
                    <th class="w-25">Content</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php 
                $query = "SELECT * FROM rooms";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run)>0){
                    while($row = mysqli_fetch_assoc($query_run)){
                        ?>
                    <tr class="text-center table-success">
                        <td><?=$row['id']?></td>
                        <td><?=$row['roomname']?></td>
                        <td><?=$row['content']?></td>
                        <td><img src="adminimage/<?=$row['image']?>" class="img-fluid" width="100" alt=""></td>
                        <td><?=$row['created_at']?></td>
                        <td><a href="updaterooms.php">Edit</a></td>
                        <td><a href="updaterooms.php">Delete</a></td>
                    </tr>
                <?php
                    }
                } ?>
                
            </table>
        </div>
    </div>
</section>
<?php include "includes/footer.php"?>