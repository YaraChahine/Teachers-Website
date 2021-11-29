<?php
include("connection.php");
session_start();
$id = $_SESSION["user_id"];



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
    <link href="./css/style3.css" rel="stylesheet">



    <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color:white;">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top header-form">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="./img/logo.png" alt="">
                <span>Teachers</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="nav-link scrollto " href="profile.php">Home</a></li>
                    <li><a class="nav-link scrollto active" href="todolist2.php">To-do List</a></li>
                    <li><a class="nav-link scrollto" href="calendar.html">Calendar</a></li>
                    <li><a class="nav-link scrollto" href="timer.html">Timer</a></li>
                    <li><a class="nav-link scrollto" href="pomodoro.html">Pomodoro Clock</a></li>
                    <li><a class="getstarted scrollto" href="logout.php">Log out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <br><br><br><br><br>

    <div class="intro">
        <h1>To-Do List</h1>

        <p>"What you do today can improve all your tomorrows" -Ralph Martson</p>
    </div>
    <!-- <img class="blue-pattern2" src="img/bluepattern1.png"> -->
    <div class="main-section">
        <div class="add-section add-intro " style="border-radius:20px">
            <form action="add_task.php" method="POST" autocomplete="off">
                <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                <input type="text" name="title" style="border-color: #ff6666" placeholder="This field is required" />
                <button type="submit">Add </button>

                <?php }else{ ?>
                <input type="text" name="title" placeholder="What do you need to do?" />
                <button type="submit">Add </button>
                <?php } ?>
            </form>
        </div>
        <?php 
            
          $query="SELECT * FROM todo where user_id=? ORDER BY id DESC ";
          $stmt = $connection->prepare($query);
          $stmt->bind_param("i", $id);

          $stmt->execute();
          $todos= $stmt->get_result();

       ?>
        <div class="show-todo-section">
            <?php if($todos->num_rows <= 0){ ?>
            <div class="todo-item">
                <div class="empty">
                    <p>empty</p>
                </div>
            </div>
            <?php } ?>

            <?php while($todo = $todos->fetch_assoc()) { ?>
            <div class="todo-item">
                <span id="<?php echo $todo['id']; ?>" class="remove-to-do">x</span>
                <?php if($todo['checked']){ ?>
                <input type="checkbox" class="check-box" data-todo-id="<?php echo $todo['id']; ?>" checked />
                <h2 class="checked">
                    <?php echo $todo['title'] ?>
                </h2>
                <?php }else { ?>
                <input type="checkbox" data-todo-id="<?php echo $todo['id']; ?>" class="check-box" />
                <h2>
                    <?php echo $todo['title'] ?>
                </h2>
                <?php } ?>
                <br>
                <small>created:
                    <?php echo $todo["date_time"] ?>
                </small>
            </div>
            <footer id="footer" class="footer">

                <?php } ?>

        </div>

    </div>


    <script src="js/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".remove-to-do").click(function () {
                const id = $(this).attr("id");

                $.post("remove_task.php",
                    {
                        id: id
                    },
                    (data) => {
                        if (data) {
                            $(this).parent().hide(600);
                        }
                    }
                );
            });

            $(".check-box").click(function (e) {
                const id = $(this).attr('data-todo-id');

                $.post('checked.php',
                    {
                        id: id
                    },
                    (data) => {
                        if (data != 'error') {
                            const h2 = $(this).next();
                            if (data == 1) {
                                h2.removeClass('checked');

                            } else {

                                h2.addClass('checked');
                            }
                        }
                    }
                );
            });
        });
    </script>


</body>

</html>