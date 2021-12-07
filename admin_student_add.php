<?php

include("connection.php");
session_start();

if (isset($_SESSION["user_id"])&& strcmp($_SESSION["type"],"1")==0){
  if (isset($_GET["id"])) {
    $id = $_GET["id"];
  } else die ("No add new tutor request is selected");

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FlexStart Bootstrap Template - Index</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="./img/favicon.png" rel="icon">
    <link href="./img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./vendor/aos/aos.css" rel="stylesheet">
    <link href="./vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="./vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="./vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/style2.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top header-form">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="./img/logo.png" alt="">
                <span>Teachers</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="nav-link scrollto active" href="admin_page.php">Main Page</a></li>
                  <li><a class="nav-link scrollto" href="admin_updates.php">My updates</a></li>
                  <li><a class="nav-link scrollto" href="admin_page.php">Remove a member</a></li>
                  <li><a class="getstarted scrollto" href="logout.php">Log out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    
    <br><br><br><br><br>

    <!-- Update Card  -->

    <div class="container thin-container">
        <div class="card">
            <h5 class="card-header user-select-none">
              <a href="admin_updates.php" class="btn btn-secondary">&lt Back</a>
              <span>&ThickSpace; New Tutor Request</span>
            </h5>
            <div class="card-body p-5">

            <?php $queryreqs = "SELECT * FROM users where id=?";
                $stmt = $connection->prepare($queryreqs);
                $stmt->bind_param("d", $id);
                $stmt->execute();
                $results = $stmt->get_result(); 
                $rowinfo = $results->fetch_assoc();
                if (empty($rowinfo)) {
                    die ("invalid id");
                }
                ?>

            <?php $queryreqs2 = "SELECT * FROM new_tutor_requests where id=?";
                $stmt = $connection->prepare($queryreqs2);
                $stmt->bind_param("d", $id);
                $stmt->execute();
                $results = $stmt->get_result(); 
                $rowAdd = $results->fetch_assoc();
                if (empty($rowAdd)) {
                    die ("invalid id");
                }
                ?>
                <?php $queryreqs3 = "SELECT * FROM new_tutor_requests where id=?";
                $stmt = $connection->prepare($queryreqs3);
                $stmt->bind_param("d", $id);
                $stmt->execute();
                $results = $stmt->get_result(); 
                $rowprice = $results->fetch_assoc();
                if (empty($rowprice)) {
                    die ("invalid id");
                }
                ?>


                <h5 class="card-title"> <strong><?php echo($rowinfo["first_name"]); ?></strong>, a student at <em>Teachers</em>, is requesting an additional tutor.</h5>
                <div class="w-75 my-5 mx-auto">
                    <div class="row">
                        <p class="col-4"><strong>Full name</strong></p>
                        <p class="col-8"><?php echo($rowinfo["first_name"]." ".$rowinfo["last_name"]); ?></p>
                    </div>
                    <div class="row">
                        <p class="col-4"><strong>Email</strong></p>
                        <p class="col-8"><?php echo($rowinfo["email"]);?></p>
                    </div>
                    <div class="row">
                        <p class="col-4"><strong>Phone number</strong></p>
                        <p class="col-8"><?php echo($rowinfo["phone_number"]);?></p>
                    </div>
                    <div class="row">
                        <p class="col-4"><strong>Education Level</strong></p>
                        <p class="col-8"><?php echo($rowprice["education_level_student"]);?></p>
                    </div>
                    <div class="row">
                        <p class="col-4"><strong>Course requested</strong></p>
                        <p class="col-8"><?php echo($rowAdd["course"]);?></p>
                    </div>
                    <div class="row">
                        <p class="col-4"><strong>Preferred tutor</strong></p>
                        <p class="col-8"><?php echo($rowAdd["preferred_tutor"]);?></p>
                    </div>
                    <div class="row">
                        <p class="col-4"><strong>Session start</strong></p>
                        <p class="col-8"><?php echo($rowAdd["starting_date"]);?></p>
                    </div>
                    <div class="row">
                        <p class="col-4"><strong>Session days</strong></p>
                        <p class="col-8"><?php echo($rowAdd["days_of_session"]);?></p>
                    </div>
                    <div class="row">
                        <p class="col-4"><strong>Preferred price range</strong></p>
                        <p class="col-8"><?php echo($rowprice["price"]);?></p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="m-3 btn btn-danger" data-bs-toggle="modal" data-bs-target="#reject-modal">Reject</a>
                    <a class="m-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#accept-modal">Accept</a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Update Card -->
    <br><br><br><br><br>

    <!-- Accept Modal -->

    <div class="modal fade" id="accept-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body p-5">
              Are you sure you want to accept <strong><?php echo($rowinfo["first_name"]." ".$rowinfo["last_name"]);?></strong>'s new tutor request? Bob will be linked with their selected tutor at <em>Teachers</em>.
            </div>
            <div class="modal-footer">
                <form action="">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="acknowledge_consultation.php?id=<?php echo($row["id"]); ?>"><button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="submit">Confirm</button>
                </form>
            </div>
          </div>
        </div>
      </div>

    <!-- End Acccept Modal -->
    
    <!-- Reject Modal -->

    <div class="modal fade" id="reject-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body p-5">
                Are you sure you want to reject <strong><?php echo($rowinfo["first_name"]." ".$rowinfo["last_name"]);?></strong>'s new tutor request?
            </div>
            <div class="modal-footer">
                <form action="">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="reject_new_tutor_request.php?id=<?php echo($row["id"]); ?>"><button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="submit">Confirm</button>
                </form>
            </div>
          </div>
        </div>
      </div>

    <!-- End Reject Modal -->

    
    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="./img/logo.png" alt="">
              <span>Teachers</span>
            </a>
            <p>We offer top quality tutors, in every field, for every student, at the best prices, <br>
              because your education is our priority.</p>
            <div class="social-links mt-3">
                <a href="https://www.facebook.com/Teachers.leb/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/teachers.lb/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

          <div class="d-block col-1 d-lg-none"></div>
          <div class="col-lg-3 col-5 footer-links">
            <br> <br class="d-block d-md-none">
            <h4><i class="bi bi-envelope"></i>&ThickSpace; Email us</h4> <br>
            elie.daccache7777@gmail.com
          </div>

          <div class="col-lg-3 col-5 footer-contact text-center text-md-start">
            <h4>
              <i class="bi bi-telephone"></i>&ThickSpace; Give us a call <br>
              <i class="bi bi-whatsapp"></i>&ThickSpace; Contact us on WhatsApp</h4> <br>
            +961 71 777 498
          </div>
          <div class="d-block col-1 d-lg-none"></div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="./vendor/aos/aos.js"></script>
    <script src="./vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./vendor/purecounter/purecounter.js"></script>
    <script src="./vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./vendor/glightbox/js/glightbox.min.js"></script>
</body>


</html>


<?php } else {header("Location: index.php");} ?>