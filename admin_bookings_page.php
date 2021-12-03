<?php

include("connection.php");
session_start();

if (isset($_SESSION["user_id"])&& strcmp($_SESSION["type"],"1")==0)
{
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

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="./img/logo.png" alt="">
                <span>Teachers</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="admin_page.php">Main Page</a></li>
                    <li><a class="nav-link scrollto" href="admin_updates.php">My updates</a></li>
                    <li><a class="nav-link scrollto" href="delete_member.php">Remove a member</a></li>
                    <li><a class="getstarted scrollto" href="logout.php">Log out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <!-- CHANGE PAGE NUMBER HERE -->
    <div class="container" data-page="1">

        <br><br><br><br><br> 

        <div class="m-5 d-flex justify-content-between">
            <div></div>
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
            <a class="btn btn-primary p-0" data-bs-toggle="modal" data-bs-target="#add-modal"><i class="bi bi-plus fs-1 lh-1"></i></a>

        </div>

        <div class="table-responsive m-5">
        
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col" onclick="sortBookingsBy(this)" name="booking">Booking ID</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="student_id">Student ID</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="student_name">Student Name</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="tutor_id">Tutor ID</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="tutor_name">Tutor Name</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="course_id">Course ID</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="course_name">Course Name</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="date">Sessions start date</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="days">Session days</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td name="id">1</td>
                    <td name="student">2</td>
                    <td>Ali Knayber</td>
                    <td name="tutor">2</td>
                    <td>Yara Chahine</td>
                    <td name="course">14</td>
                    <td>Discrete II - College</td>
                    <td name="date">24/11/2021</td>
                    <td name="days">Mon Tue Wed Thu Fri Sat Sun</td>
                    <td> <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal" onclick="loadBookingData(this)">Edit</a></td>
                </tr>
                <tr>
                    <td name="id">2</td>
                    <td name="student">7</td>
                    <td>John A</td>
                    <td name="tutor">5</td>
                    <td>John B</td>
                    <td name="course">12</td>
                    <td>Calculus III - College</td>
                    <td name="date">24/12/2021</td>
                    <td name="days">Mon Tue Wed</td>
                    <td> <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal" onclick="loadBookingData(this)">Edit</a></td>
                </tr>
                <tr>
                    <td name="id">3</td>
                    <td name="student">9</td>
                    <td>John C</td>
                    <td name="tutor">12</td>
                    <td>John D</td>
                    <td name="course">11</td>
                    <td>Organic Chemistry - College</td>
                    <td name="date">12/01/2022</td>
                    <td name="days">Tue Fri Sat</td>
                    <td> <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal" onclick="loadBookingData(this)">Edit</a></td>
                </tr>
                <tr>
                    <td name="id">4</td>
                    <td name="student">18</td>
                    <td>John E</td>
                    <td name="tutor">22</td>
                    <td>John F</td>
                    <td name="course">10</td>
                    <td>Physics - Middle School</td>
                    <td name="date">31/01/2022</td>
                    <td name="days">Wed Thu</td>
                    <td> <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal" onclick="loadBookingData(this)">Edit</a></td>
                </tr>
                
                </tbody>
            </table>
        </div>

    </div>

    <!-- Edit Modal -->

    <div class="modal modal-large fade" id="edit-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body p-5">
                <h2 class="text-center">Edit booking</h1>
                <form action="" id="editform">
                    <div class="row">
                        <div class="col-4">
                            Student ID
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="number" name="student">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Tutor ID
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="number" name="tutor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Course ID
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="number" name="course">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Session start date
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="date" name="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Session days
                        </div>
                        <div class="col-8 d-flex flex-column align-items-start m-0">
                            <div>
                                <input class="" type="checkbox" name="Mon">&ThickSpace; Monday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Tue">&ThickSpace; Tuesday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Wed">&ThickSpace; Wednesday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Thu">&ThickSpace; Thursday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Fri">&ThickSpace; Friday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Sat">&ThickSpace; Saturday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Sun">&ThickSpace; Sunday
                            </div>
                        </div>
                    </div>
                </form>
                <form action="" class="d-flex justify-content-center pb-0"> <!-- delete booking php -->
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Delete Booking</button>
                </form>
            </div>
            <div class="modal-footer">
                <form action="">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="$('#editform').submit()">Confirm</button>
                </form>
            </div>
          </div>
        </div>
      </div>

    <!-- End Edit Modal -->


    <!-- Add Modal -->

    <div class="modal modal-large fade" id="add-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body p-5">
                <h2 class="text-center">Add booking</h1>
                <form action="">
                    <div class="row">
                        <div class="col-4">
                            Student ID
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="number" name="student">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Tutor ID
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="number" name="tutor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Course ID
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="number" name="course">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Session start date
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="date" name="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            Session days
                        </div>
                        <div class="col-8 d-flex flex-column align-items-start m-0">
                            <div>
                                <input class="" type="checkbox" name="Mon">&ThickSpace; Monday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Tue">&ThickSpace; Tuesday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Wed">&ThickSpace; Wednesday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Thu">&ThickSpace; Thursday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Fri">&ThickSpace; Friday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Sat">&ThickSpace; Saturday
                            </div>
                            <div>
                                <input class="" type="checkbox" name="Sun">&ThickSpace; Sunday
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <form action="">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="$('#editform').submit()">Confirm</button>
                </form>
            </div>
          </div>
        </div>
      </div>

    <!-- End Add Modal -->

    <br><br><br><br>
    
    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
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

    <!-- Template Main JS File -->
    <script src="./js/main.js"></script>
    <script src="./js/main2.js"></script>

</body>
</html>


<?php } else {header("Location: index.html");} ?>