<?php include "includes/header.php";
include "includes/topbar.php";
include "includes/sidebar.php";
include '../dbconnect/config.php';
$roomsnameerr=$contenterr=$imageerr='';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['submit'])){ 
        if(empty($_POST['roomsname']) || $_POST['roomsname']==''){
            $roomsnameerr="*Please Enter rooms name";
        }else if(empty($_POST['content']) || $_POST['content']==''){
            $contenterr="*Please Enter content";
        }else if((empty($_FILES['image']['name']) || $_FILES['image']['name']=='')){
            $imageerr="*Enter your image";
        }
        else{
            $imagename=$_FILES['image']['name'];
            $tmpname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,'adminimage/'.$imagename);
            $roomsname = $_POST['roomsname'];
            $description = $_POST['content'];
            $query = "INSERT INTO rooms(roomname,content,image) 
            values('$roomsname','$description','$imagename')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Rooms addded successfully');
                    window.location.href='rooms.php';
                </script>";
            }else{
                echo "something went wrong".mysqli_error($con);
            }
        }
    }
}
?>
<section class="section-class pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Add Rooms Details</h3>
                <form action="" class="row col-lg-12" method="post" enctype="multipart/form-data" class="d-flex flex-wrap">
                    <div class="mb-3 w-100">
                        <label for="slidername" class="form-label fw-bold">Slider Name:</label>
                        <input type="text" class="form-control pb-4 pt-4" name="roomsname" placeholder="Enter your product name">
                        <small style="color:red"><?php echo $roomsnameerr;?></small>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="sliderimage" class="form-label  fw-bold">Add Rooms Image:</label>
                        <input type="file" name="image" class="form-control pb-5 pt-3" id="sliderimage" aria-describedby="emailHelp">
                        <small style="color:red"><?php echo $imageerr;?></small>
                    </div>
    
                    

                  
                    <div class="mb-3 w-100">
                        <label for="description" class="form-label  fw-bold">Content:</label>
                        <textarea class="form-control" cols="30" rows="10" name="content" placeholder="Enter your description name"></textarea>
                        <small style="color:red"><?php echo $contenterr;?></small>
                    </div>

                    <div class="mb-3">
                    <input type="submit" class="btn btn-primary px-5" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'includes/footer.php' ?>