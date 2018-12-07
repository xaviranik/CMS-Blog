<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YoloLife</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Navbar on-scroll effect -->
    <script>
        $(function () {
          $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
          });
        });
    </script>

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

<!-- Cover Image -->
<div class="coverImage">
        <!-- Search Bar -->
    <div class="search-bar">
        <h1>Let's talk YoloLife!</h1>
        <div class="col-md-12">
            <form action="search.php" method="get">
                <div class="input-group">
                    <input name="search" type="text" class="form-control" placeholder="Search blogs...">
                    <span class="input-group-btn">
                    <button name="submit" class="btn btn-danger" type="submit" value="done"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>