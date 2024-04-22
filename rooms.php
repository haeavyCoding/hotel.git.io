<?php include "layout/header.php"; 
?>

  <!--Start First Section-->
  <section class="Nav">
    <div class="contain">
      <h1>Our Luxurious Rooms</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="anchor">Home</a></li>
          <li class="breadcrumb-item active anchor" aria-current="page"> Our Luxurious Rooms</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--End First Section-->

  <!--Start Second Section-->
  <section class="sec">
     <?php include "dbconnect/config.php";
      $query = "SELECT * FROM rooms";
      $query_run = mysqli_query($con, $query);
      if(mysqli_num_rows($query_run)>0){
        while($row=mysqli_fetch_assoc($query_run)){ ?>
          <div class="roomdiv d-flex ">
          <div class="width-part1">
            <a href="roomdetails.php"><img class="img-fluid" src="admin/adminimage/<?= $row['image'] ?>" alt="Rooms"></a>
          </div>
          <div class="width-part2">
            <div class="width-part2-text">
              <h3 class="pb-2 fw-bold"><?= $row['roomname'] ?></h3>
              <p class=""><?= $row['content'] ?></p>
            </div>
            <div class="width-part2-icon d-flex justify-content-around">
              <div class="flat-icon">
                <i class="fa fa-coffee foodicon" data-toggle="popover" data-placement="top" data-trigger="hover"
                  data-content="Breakfast Included" data-original-title="Breakfast"></i>
              </div>

              <div class="flat-icon">
                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                  data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
              </div>

              <div class="flat-icon">
                <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover"
                  data-content="Restaurant" data-original-title="Zante Restaurant"></i>
              </div>
              <div class="flat-icon">
                <a href="booking.php" class="button">Book Now</a>
              </div>
            </div>
            
          </div>
        </div>
        </div>
        <?php   
        }
      } ?>

       
  </section>
  

  <?php include "layout/footer.php" ?>
