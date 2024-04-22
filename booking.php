<?php include "layout/header.php"?>
<body>
<section class="contact-section py-4">
    <div class="container">
        <div class="row">
        <h1 class="py-3 fw-bold text-center">Book Now</h1>
        <form class="form-group col-lg-12 d-flex py-4 mb-4 row">

                <div id="first-group" class="col-lg-6 col-md-12">

                    
                        <label for="firstname" class="py-2 fw-bolder fs-5"><i class="fa fa-user" aria-hidden="true"></i> First name</label>
                        <input type="text" id="firstname" placeholder="First name"  class="form-control p-3">
                    

                        <label for="firstname" class="py-2 fw-bolder fs-5"><i class="fa fa-phone" aria-hidden="true"></i> Phone number</label>
                        <input type="number" id="input-group" placeholder="Phone number" class="form-control p-3">
                    

                    
                        <label for="firstname" class="py-2 fw-bolder fs-5"><i class="fa fa-user" aria-hidden="true"></i> Departure Date</label>
                        <input type="text" id="input-group" placeholder="Departure Date" class="form-control p-3">


                        <label for="firstname" class="py-2 fw-bolder fs-5"><i class="fa fa-users" aria-hidden="true"></i> No.of guests</label>
                        <select id="input-grou" class="form-control p-3">
                            <option value="">No.of guests</option>
                            <option value="">1-5</option>
                            <option value="">6-10</option>
                            <option value="">11-20</option>
                        </select>
                    

                </div>

                <div id="second-group" class="col-lg-6 col-md-12">
                <label for="lastname" class="py-2 fw-bolder fs-5"><i class="fa fa-user" aria-hidden="true"></i> Last Name</label>
                        <input type="text" id="lastname" placeholder="Last Name"  class="form-control p-3">
                    

                    
                        
                        <label for="email" class="py-2 fw-bolder fs-5"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label>
                        <input type="email" id="email" placeholder="Enter Email" class="form-control p-3">
                

                
                        
                        <label for="arrival" class="py-2 fw-bolder fs-5"><i class="fa fa-calendar" aria-hidden="true"></i> Arrival Date</label>
                        <input type="text" id="arrival" placeholder="Arrival Date" class="form-control p-3">
                    

                    
                        <label for="roomtype" class="py-2 fw-bolder fs-5"><i class="fa fa-users" aria-hidden="true"></i></i> Room Type</label>
                        <select id="roomtype" class="form-control p-3">
                            <option value="">Room Type</option>
                            <option value="">AC</option>
                            <option value="">Non-AC</option>
                            <option value="">Single Bed</option>
                            <option value="">Double Bed</option>
                        </select>
                    
                    
            
                </div>

                <button type="submit" class="btn btn-outline-warning py-2 m-3 w-auto" value="Submit">Book Now</button>

            </div>
        </form>
    </div>
    </div>
</section>


<?php include "layout/footer.php"?>