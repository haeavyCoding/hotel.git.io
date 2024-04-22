<?php 
include "../dbconnect/config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM registration WHERE id=$id";
    $query_run = mysqli_query($con, $query);
    if($query_run){
        echo "<script>
            alert('Data deleted successfully');
            window.location.href='userlist.php';
        </script>";
    }else{
        echo "something went wrong please retry again";
    }
}else{
    header('Location:userlist.php');
}