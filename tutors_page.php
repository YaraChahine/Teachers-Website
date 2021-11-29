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
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="./img/logo.png" alt="">
        <span>Teachers</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto active" href="tutors_page.php">Our tutors</a></li>
          <li style="display: none;"><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#" style="display: none;"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="login.html">Log in</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container">

        <div class="row gy-4 my-5">

          <header class="section-header p-0">
            <h2>Tutors</h2>
            <p>Our hard working tutors</p>
          </header>
  
          <div class="row my-1 p-0">
            <div class="col-11"></div>
            <div class="col-1 d-flex justify-content-around p-0">
              <button class="filter-button" onclick="clear_filters()"><i class="bi bi-x"></i></button>
              <button class="filter-button" onclick="filter()"><i class="bi bi-filter" ></i></button>
            </div>
          </div>

          <div class="collapse show container my-1" id="filter-panel">
            <form action="tutors_page.php">
              <div class="thin-container row card card-body d-flex flex-row justify-content-around p-5">
                <div class="col-12 col-md-6 p-3">
                  <span>Age</span>
                  <select name="age" id="age" onchange="this.form.submit()" class="form-select w-auto d-inline-block m-2">
                    <option value="all">All</option>
                    <option value="18-25">18-25</option>
                    <option value="26-35">26-35</option>
                    <option value="36-49">36-49</option>
                    <option value="50">50+</option>
                  </select>
                  <br>
                  <span>Gender</span>
                  <select name="gender" id="gender" onchange="this.form.submit()" class="form-select w-auto d-inline-block m-2">
                    <option value="all">All</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                  </select>
                  <br>
                  <span>City</span>
                  <input type="text" name="city" id="city" placeholder="Beirut" class="form-control w-auto d-inline-block m-2">
                </div>
                <div class="col-12 col-md-6 p-3">
                  <span>Education level</span>
                  <select name="education" id="education" onchange="this.form.submit()" class="form-select w-auto d-inline-block m-2">
                    <option value="all">All</option>
                    <option value="0">High school</option>
                    <option value="1">College - undergraduate</option>
                    <option value="2">College - graduate</option>
                    <option value="3">Other</option>
                  </select>
                  <br>
                  <span>Field/degree</span>
                  <input type="text" name="field" id="field" placeholder="Computer Engineering" class="form-control w-auto d-inline-block m-2">
                  <br>
                  <span>Years of experience</span>
                  <select name="years" id="years" onchange="this.form.submit()" class="form-select w-auto d-inline-block m-2">
                    <option value="all">All</option>
                    <option value="0-3">0-3</option>
                    <option value="4-6">4-6</option>
                    <option value="7-9">7-9</option>
                    <option value="10">10+</option>
                  </select>
                </div>
              </div>
            </form>
          </div>

          <?php 

          $currentYear = date("Y");
          $ageQ = "";
          $age = "";
          if (isset($_GET["age"])) $age = $_GET["age"]; 
          switch ($age) {
            case "18-25":
                $ageQ = $currentYear-18 . " AND " . $currentYear-25;
                break;
            case "26-35":
                $ageQ = $currentYear-26 . " AND " . $currentYear-35;
                break;
            case "36-49":
                $ageQ = $currentYear-36 . " AND " . $currentYear-49;
                break;
            case "50":
                $ageQ = $currentYear-50 . " AND " . $currentYear-60;
                break;
            default:
                $ageQ = $currentYear-18 . " AND " . $currentYear-60;
          }

          $gender = "";
          if (isset($_GET["gender"]) $gender = $_GET["gender"];
          $genderQ = "";
          switch ($_GET["gender"]) {
            case "m":
                $genderQ = "Male";
                break;
            case "f":
                $genderQ = "Female";
                break;
            case "o":
                $genderQ = "Other";
                break;
            default:
                $genderQ = "%";
          }

          $city = "";
          if (isset($_GET["city"]) $city = $_GET["city"];
          $genderQ = "";
          switch ($city) {
            case "":
                $cityQ = "%";
                break;
            case "f":
                $genderQ = "Female";
                break;
            case "o":
                $genderQ = "Other";
                break;
            default:
                $genderQ = "%";
          }

          if ($_GET["age"] == "all" && $_GET["gender"] == "all" && $_GET["city"] == "" && $_GET["education"] == "all" 
          && $_GET["field"] == "" && $_GET["years"] == "all" && $_GET["levels"] == "all" && $_GET["course"] == "") {
            $query = "
            SELECT * FROM users JOIN tutors ON `users`.`user_id` = `tutors`.`user_id` WHERE
            age BETWEEN ". $ageQ . "
            gender LIKE ". $genderQ . "
            city LIKE '%' AND
            education LIKE '%' AND
            field LIKE '%' AND
            years LIKE '%'";
          }

          ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch my-5" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="./img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Abdallah</h4>
                <span>Piano Teacher</span>
                <p>Sarah has been playing the piano for 12 years. She believes that any person can learn to play the
                  piano! They just need to find the learning style that suits them best, and she happens ot be great at
                  exploring a student's learning style! </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch my-5" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="./img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ali Knayber</h4>
                <span>Python tutor</span>
                <p>Ali is a computer science graduate from the Lebanese American Univesity. He has worked for several
                  companies overseas, specialized in machine learning and artificial intelligence.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch my-5" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="./img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Reem Zubdeh</h4>
                <span>Mobile Developer</span>
                <p>Reem has been teaching mobile development for over 5 years now. With her, you will be able to deploy
                  your first application in less that a month!</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch my-5" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="./img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque
                  ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

  </main><!-- End #main -->

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