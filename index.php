<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chic Beauty Salon</title>
    <link rel="shortcut icon" href="img/salon_logo.png" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--css file-->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/venobox.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/chosen.css" rel="stylesheet">
    <link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="css/notifIt.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--Preload-->
    <?php include_once('includes/header.php');?>
    <!-- end nav -->
    <!-- end banner -->

    <!--service part start-->
    <section class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Our Services</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item wow fadeIn">
                        <div class="thumb">
                            <a href= "services.php"><img src ="img/services/haircut.jpg" alt=""></a>
                        </div>
                        <div class="service-info text-center">
                            <h3><a href="service-single.html">Hair Cut</a></h3>
                            <p>If you want a certain haircut, our professional stylist can give you the best advice like knowing the best haircut for your face shape</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item wow fadeIn">
                        <div class="thumb">
                            <a href= "services.php"><img src="img/services/bridal-makeup.jpg" alt=""></a>
                        </div>
                        <div class="service-info text-center">
                            <h3><a href=" ">MakeUp</a></h3>
                            <p>Makes your face look sophisticated, chic, and beautiful. Bridal make-up is also a specialty of the salon.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item wow fadeIn">
                        <div class="thumb">
                            <a href="services.php"><img src="img/services/facial.jpg" alt=""></a>
                        </div>
                        <div class="service-info text-center">
                            <h3><a href="service-single.html">Facial</a></h3>
                            <p>Cleanses, exfoliates, and moisturizes your face skin. Specific products, manual manipulation (massage), and in some cases heat or steam are applied, as needed.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="services.php" class="btn btn-primary">All Services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->


    <section class="section-spacing inverse-bg" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Our gallery</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/gallery/facial spa.jpg" class="venobox" data-gall="gallery">
                            <img src="img/gallery/facial spa.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Facial Massage</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/services/bridal-makeup.jpg" class="venobox" data-gall="gallery">
                            <img src="img/services/bridal-makeup.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Bridal Makeup</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/gallery/hair treatment.jpg" class="venobox" data-gall="gallery">
                            <img src="img/gallery/hair treatment.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Hair Treatment</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/massage-room.jpg" class="venobox" data-gall="gallery">
                            <img src="img/massage-room.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Massage Room</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/gallery/body massage.jpg" class="venobox" data-gall="gallery">
                            <img src="img/gallery/body massage.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Body Massage</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/cosmetics.jpg" class="venobox" data-gall="gallery">
                            <img src="img/cosmetics.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Salon Cosmetics</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end gallery -->

    <section class="section-spacing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="appoinment-text wow fadeIn">
                        <h2>Make Home Appointment?</h2>
                         <p> If you are in <strong>METRO MANILA</strong> then fill the form for appointment.</p>
						 <p>We are giving you home service. If you have any concern, feel free to call us in the following number</p>
                         <p><strong>Call us : +93987654321</strong> or fill out our online booking & equiry form and we’ll contact you.</p>
                        <a href="#" data-toggle="modal" data-target="#appointment2" class="btn btn-primary">Make Home Appointment</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="appoinment-img text-md-right text-center wow fadeIn">
                        <img class="tilt-img rounded" src="img/salon-interior.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end appointment -->

    <!--Counter part and funfacts-->
    <section class="section-spacing" id="fun_fact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fun-fact-img wow fadeIn">
                        <img class="tilt-img rounded" style="height: 400px" src="img/makeup&manicure.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">800</span>
                                <h3>Clients</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">50</span>
                                <h3>Services</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">35</span>
                                <h3>Beautician</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">890</span>
                                <h3>Products</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end fun facts -->
    <?php include_once('includes/footer.php');?>
    <!-- end footer -->

    <!-- Bact to top -->
    <div class="back-top">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>

    <!-- Start Video Modal -->
    <div class="modal fade modal-vcenter" id="video-modal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle-o"></i></button>
                </div>
                <div class="modal-body">
                    <iframe width="760" height="500" src="https://www.youtube.com/embed/EEnkifmw25U?rel=0&amp;showinfo=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Modal -->

    <!-- Appointment Modal -->
    <div class="modal fade modal-vcenter" id="appointment" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2>REQUEST SALON APPOINTMENT</h2>
                </div>
                <div class="modal-body">
                    <form action="#" id="reservation-form" method="post" data-toggle="validator">
                        <input type="hidden" name="add_appointment" value="saloon" />

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label>Your Name*</label>
                                    <input type="text" id="frname" class="form-control" name="name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Phone*</label>
                                    <input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number" placeholder="Phone" required="true" maxlength="11" pattern="[0-9]+">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Service</label>
                            <select id="rselect-service" class="select-option" name="service[]" multiple >
                            <?php
								$query=mysqli_query($con, "select * from tblservices");
								while($row=mysqli_fetch_array($query)) {
							?>
                                <option value="<?php echo $row['ID'];?>">
                                    <?php echo $row['ServiceName'];?>
                                </option>
                            <?php } ?>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Reservation Date*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" id="rdate" class="form-control date-pic" name="date" placeholder="mm/dd/yyyy" required data-error="Please select reservation date">
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Reservation Time*</label>
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="atime" id="services" required="true" class="form-control">
                                                <option value="10:00 am">10:00 am</option>
                                                <option value="11:00 am">11:00 am</option>
                                                <option value="12:00 pm">12:00 pm</option>
                                                <option value="1:00 pm">2:00 pm</option>
                                                <option value="1:00 pm">3:00 pm</option>
                                                <option value="1:00 pm">4:00 pm</option>
                                                <option value="1:00 pm">5:00 pm</option>
                                                <option value="1:00 pm">6:00 pm</option>
                                                <option value="1:00 pm">7:00 pm</option>
                                                <option value="1:00 pm">8:00 pm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="submit-block text-right">
                            <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                            <input value="Submit" name="submit" class="btn btn-primary" type="submit">
                            <input type="hidden" name="status" value="0">
                        </div>

                        <div id="msgSubmitRes" class="h3 text-center hidden"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-vcenter" id="appointment2" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2>REQUEST HOME APPOINTMENT</h2><br>
                    <p> If you are in <strong>METRO MANILA</strong> then fill the form for appointment</p>
                </div>
                <div class="modal-body">
                    <form id="reservation-form-home" method="post" data-toggle="validator">
                        <input type="hidden" name="add_appointment" value="home" />
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label>Your Name*</label>
                                    <input type="text" id="rfname" class="form-control" name="name" required data-error="Please enter your  name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Phone*</label>
                                    <input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea id="raddress" class="form-control" name="address"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Service</label>
                            <select id="rselect-service" class="select-option" multiple name="service[]">
                                <?php $query=mysqli_query($con,"select * from tblservices");
								while($row=mysqli_fetch_array($query)){
							?>
                                <option value="<?php echo $row['ID'];?>">
                                    <?php echo $row['ServiceName'];?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Reservation Date*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" id="rdate" class="form-control date-pic" name="date" placeholder="mm/dd/yyyy" required data-error="Please select reservation date">
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Select Time</label>
                                        <select name="atime" id="services" required="true" class="form-control">
                                            <option value="10:00 am">10:00 am</option>
                                            <option value="11:00 am">11:00 am</option>
                                            <option value="12:00 pm">12:00 pm</option>
                                            <option value="1:00 pm">2:00 pm</option>
                                            <option value="1:00 pm">3:00 pm</option>
                                            <option value="1:00 pm">4:00 pm</option>
                                            <option value="1:00 pm">5:00 pm</option>
                                            <option value="1:00 pm">6:00 pm</option>
                                            <option value="1:00 pm">7:00 pm</option>
                                            <option value="1:00 pm">8:00 pm</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="submit-block text-right">
                            <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                            <input value="Submit" name="submit" class="btn btn-primary" type="submit">
                        </div>
                        <div id="msgSubmitRes" class="h3 text-center hidden"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/bootstrap-timepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/chosen.jquery.js"></script>
    <script src="js/notifIt.min.js"></script>

    <script src="mail/js/form-validator.min.js"></script>
    <script src="mail/js/contact-form-script.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
