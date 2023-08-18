<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<style>
    .form-inline .custom-select, .form-inline .input-group {
    width: 200px;
    height: 30px;
    padding-left: 10px;
    padding-right: 15px;
    }
    .input-group > .custom-select:not(:last-child), .input-group > .form-control:not(:last-child) {
    height: 35px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    font-size:13px;
    padding: 0;
    padding-left:8px;
   
}.input-group > .input-group-append > .btn, .input-group > .input-group-append > .input-group-text, .input-group > .input-group-prepend:first-child > .btn:not(:first-child), .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child), .input-group > .input-group-prepend:not(:first-child) > .btn, .input-group > .input-group-prepend:not(:first-child) > .input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    height: 35px;
}
.navbar .navbar-nav .nav-item.active .nav-link, .navbar .navbar-nav .nav-link:hover {
    /* color: #7d3c92; */
     color:#ffc107;
     background-color: #fff;
     border:#ffc107;
     border-radius:20px;
}
.navbar .navbar-nav .nav-item:hover:not(.btn-appointment)::after, .navbar .navbar-nav .nav-item:hover:not(.btn-appointment)::before, .navbar .navbar-nav .nav-item.active:not(.btn-appointment)::after, .navbar .navbar-nav .nav-item.active:not(.btn-appointment)::before {
    /* opacity: 1; */
    visibility: hidden;
}
.btn-outline-primary {
    color:#ffc107;
     background-color: #fff;
     border:1px solid #ffc107;
}
.btn-outline-primary:hover{
    color:#fff;
     background-color: #ffc107;
     border:1px solid #fff;
}
</style>
<div class="preloader">
        <div class="preloader_image">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div>
                <div class="sk-child sk-double-bounce2"></div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/salon_logo.png" width="100px" height="100px" alt="Logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="row justify-content-center">
            <form class="form-inline text-center" action="search.php" method="post">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for services" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
</div>

            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="offer.php">Offer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="accepted_appoint.php">Accepted List</a>
                    </li>
                    <li class="nav-item btn-appointment">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#appointment">Salon Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--    banner-->
<section class="carousel slide" id="banner" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url(https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">

                                    <h1 class="animated fadeInUp" style="color:deeppink">Chic Beauty Salon</h1>
                                    <p class="animated fadeInUp" style="color:deeppink">The place that makes you look like a star.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInUp">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url(https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h1 class="animated fadeInUp" style="color:deeppink">Chic Beauty Salon</h1>
                                    <p class="animated fadeInLeft" style="color:deeppink">The place that makes you look like a star.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInLeft">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url(https://images.unsplash.com/photo-1580618672591-eb180b1a973f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h1 class="animated fadeInUp" style="color:deeppink">Chic Beauty Salon</h1>
                                    <p class="animated fadeInRight" style="color:deeppink">The place that makes you look like a star.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInRight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
                <li data-target="#banner" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    
<!--    banner end-->
<!-- <section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>Search Services</span></h2>
                    <p>Search results for: <?php echo $search; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if (isset($_POST['search'])) {
                $search = $_POST['search'];
                $query = "SELECT * FROM tblservices WHERE ServiceName LIKE '%$search%' OR description LIKE '%$search%'";
                $result = mysqli_query($con, $query);

                while ($row = mysqli_fetch_array($result)) {
                    // Display search results as cards
                    // Modify the following code according to your design
                    ?>
                    <div class="col-md-4">
                        <div class="service-item wow fadeIn">
                            <div class="thumb">
                                <a><img src="img/services/<?php echo $row['ServiceImage']; ?>" alt=""></a>
                            </div>
                            <div class="service-info text-center">
                                <h3><a href="service-single.html"><?php echo $row['ServiceName']; ?></a></h3>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section> -->
