<?php

include("connection.php");



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
                    <li><a class="nav-link scrollto active" href="#hero">Calendar</a></li>
                    <li><a class="nav-link scrollto" href="#about">To-do List</a></li>
                    <li><a class="nav-link scrollto" href="#team">Timer</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Pomodoro Clock</a></li>
                    <li><a class="getstarted scrollto" href="#about">Log out</a></li>
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
                    <th scope="col" onclick="sortBookingsBy(this)" name="user_id">User ID</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="tutor_id">Tutor ID</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="tutor_first">First Name</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="tutor_last">Last Name</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="email">Email</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="age">Age</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="gender">Gender</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="phone">Phone</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="city">City</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="level">Education Level</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="school">Institution Name</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="field">Field</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="years">Years of Experience</th>
                    <th scope="col" onclick="sortBookingsBy(this)" name="years">Can teach</th>

                </tr>
                </thead>
                <tbody>
                <!--  $query_tutors_application = "SELECT users.user_id ,tutors.tutor_id, first_name,last_name,email,age,gender,phone_number,city,education_level,college_name,major,years_of_experience,course_name FROM  users JOIN tutors JOIN courses JOIN tutor_courses where users.user_id=tutors.user_id LIMIT 10 OFFSET 80"; -->
                <?php 
                if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                  $page_no = $_GET['page_no'];
                  } else {
                      $page_no = 1;
                      }
                

                      $query = "SELECT COUNT(*) As total_records FROM users";
                      $stmt1 = $connection->prepare($query);
                      $stmt1->execute();
                      $results_tutors = $stmt1->get_result();
                      $total_records = $results_tutors->fetch_assoc();




                $records_per_page = 5;
                $offset = ($page_no-1) * $records_per_page;
                $previous_page = $page_no - 1;
                $next_page = $page_no + 1;
                $query = "SELECT COUNT(*) As total_records FROM users";
                $stmt1 = $connection->prepare($query);
                $stmt1->execute();
                $results_tutors = $stmt1->get_result();
                $total_records = $results_tutors->fetch_assoc();
                $no_of_pages = ceil($total_records["total_records"] / $records_per_page);
                $second_last = $no_of_pages - 1;

                $query_tutors_application = "SELECT * FROM users LIMIT $records_per_page OFFSET $offset";
                $stmt = $connection->prepare($query_tutors_application);
                $stmt->execute();
                $results_tutors = $stmt->get_result();
                ?>
              <div class="pagContainer">
                <ul class="pagination">
                  <li class="page-item" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                    <a class="page-link"aria-label="Previous" <?php if($page_no > 1){
                          echo "href='?page_no=$previous_page'";
                      } ?>><span aria-hidden="true">&laquo;</span></a>
                  </li>
                      <?php  	 
                        for ($counter = 1; $counter <= $no_of_pages; $counter++){
                        if ($counter == $page_no) {
                          echo "<li class='page-item'><a class='page-link' >$counter</a></li>";	
                        }else{
                          echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                            }
                          
                        }?>
                  <li class="page-item"<?php if($page_no >= $no_of_pages){
                      echo "class='disabled'";
                  } ?>>
                    <a class="page-link"<?php if($page_no < $no_of_pages) {
                    echo "href='?page_no=$next_page'";
                    } ?>><span aria-hidden="true">&raquo;</span></a>
                      </li>
                </ul>

                </div>
                <?php


                while($row = $results_tutors->fetch_assoc()){
                  echo "<tr>
                 <td>".$row['user_id']."</td>
                 <td>".$row['first_name']."</td>
                 <td>".$row['last_name']."</td>
                 <td>".$row['email']."</td>
                 <td>".$row['phone_number']."</td>


                 </tr>";
                      }
                ?>
                <!-- <tr>
                    <td>2</td>
                    <td>7</td>
                    <td>John</td>
                    <td>A</td>
                    <td>john@a.com</td>
                    <td>23</td>
                    <td>Male</td>
                    <td>1234567</td>
                    <td>Beirut</td>
                    <td>College Undergraduate</td>
                    <td>School1</td>
                    <td>Math</td>
                    <td>3</td>
                    <td>Math<br>Physics<br>Chemistry</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>8</td>
                    <td>John</td>
                    <td>B</td>
                    <td>john@b.com</td>
                    <td>26</td>
                    <td>Female</td>
                    <td>2345678</td>
                    <td>Beirut</td>
                    <td>College Graduate</td>
                    <td>School2</td>
                    <td>Biology</td>
                    <td>3</td>
                    <td>Biology<br>Chemistry</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>17</td>
                    <td>John</td>
                    <td>C</td>
                    <td>john@d.com</td>
                    <td>20</td>
                    <td>Male</td>
                    <td>3456789</td>
                    <td>Beirut</td>
                    <td>High school</td>
                    <td>School3</td>
                    <td>Math</td>
                    <td>3</td>
                    <td>General Science</td>
                </tr> -->
                </tbody>
            </table>
        </div>

    </div>

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